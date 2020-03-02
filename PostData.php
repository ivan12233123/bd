<?php
class PostData
{
    public function insertPost($data){
        $stmt=$this->pdo->prepare("insert into posts(title, description, datePublication, photo)
 values (:title, :description, :datePublication, :photo)");
        if($stmt->execute([
"title"=>$data["title"],
            "description"=>$data["description"],
            "datePublication"=>$data["datePublication"],
            "photo"=>$data["photo"],
        ])){
            return $this->pdo->lastInsertId();
        };
        return -1;
}
    protected $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }
    public function getAllPosts()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM posts ORDER BY datePublication");
        if ($stmt->execute()) {
            return $stmt->fetchAll();
        };
        return null;
    }


    public function deletePost($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id=:id");
        if ($stmt->execute(["id"=>$id])){
            return 1;
        };
        return -1;
    }

   public function getPostId($id){
       $stmt = $this->pdo->prepare("Select * from posts where id=:id");
       if($stmt ->execute([
           "id"=>$id
       ]))
       {
           return $stmt ->fetch();
       };
       return null;
    }

    public function updatePost($data)
    {
        $stmt = $this->pdo->prepare("UPDATE posts set title=:title, 
description=:description, photo=:photo WHERE id=:id ");
        if ($stmt->execute([
            "id"=>$data["id"],
            "title" => $data["title"],
            "description" => $data["description"],
            "photo"=>$data["photo"]

        ])) {
            return 1;
        };
        return -1;
    }


}