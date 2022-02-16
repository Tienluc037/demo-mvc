<?php
require "vendor/autoload.php";
use App\Controller\PostController;
use App\Model\PostModel;

$postController = new PostController();
$page = $_GET['page']?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=post-list">Post List</a>
<?php
switch ($page) {
    case "post-list":
        $postController->getAllPost();
        break;
    case "post-detail":
        $id=$_GET["id"];
        $postController->getPostById($id);
        break;
    case "post-create":
        $postController->createPost();
        break;
    case "post-delete":
        $postController->deletePost($_GET["id"]);
        break;
    case "post-update":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $postController->edit();
        } else {
            $postController->update();
        }
        break;
    default:
        include_once "App/View/home.php";
}


?>
</body>
</html>
