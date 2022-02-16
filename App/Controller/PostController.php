<?php
namespace App\Controller;
use App\Model\PostModel;
class PostController
{
    public $postModel;

    public function __construct()
    {
        $this->postModel= new PostModel();
    }

    public function getAllPost()
    {
        $posts = $this->postModel->getAll();
        include_once "App/View/post/list.php";
    }

    public function getPostById($id){
        $post= $this->postModel->getById($id);
        include "App/View/post/detail.php";

    }
    public function createPost(){
        if ($_SERVER["REQUEST_METHOD"]== "GET"){
            include "App/View/post/create.php";
        }
        else {
            $data=[
                "title"=>$_REQUEST["title"],
                "content"=>$_REQUEST["content"]
            ];
            $this->postModel->create($data);
            header("location:index.php?page=post-list");
        }
    }
    public function deletePost($id){
        $this->postModel->delete($id);
        header("location:index.php?page=post-list");

    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $post = $this->postModel->getById($_REQUEST['id']);
            include_once "App/View/post/update.php";
        }
    }


    public function update()
    {
            $this->postModel->update($_REQUEST);
            header("Location:index.php?page=post-list");
    }

}