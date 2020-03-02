<?php

require_once "bootstrap.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}

$post=$newPost->getPostID($_GET['id']);

if ($post) {
    if (file_exists('uploads/' . $post->photo)) {
        if ($post->photo != 'default.jpg') {
            unlink('uploads/' . $post->photo);
        }
        $newPost->deletePost($_GET['id']);
    }
    header("Location: /");
    exit;

}

require_once "views/posts/deletePost.View.php";