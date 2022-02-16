<?php

namespace App\Model;
class PostModel extends BaseModel
{
    public $table = "posts";

    public function create($post)
    {
        $sql = "insert into posts(title, content) values (?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $post['title']);
        $stmt->bindParam(2, $post['content']);
        $stmt->execute();

    }


    public function update($request)
    {
        $sql = "update $this->table set title = ?,content = ? where id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindValue(1, $request["title"]);
        $stmt->bindValue(2, $request["content"]);
        $stmt->bindValue(3, $request["id"]);
        $stmt->execute();
    }
}