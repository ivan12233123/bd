<?php
require_once "bootstrap.php";
$title="";

$post=$newPost->getPostId($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}
require_once "views/posts/showPost.view.php";