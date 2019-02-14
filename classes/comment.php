<?php
class Comment{
    private $author;
    private $comment;
    private $location;
    private $id;
    public function __construct($id, $author, $comment, $location){
        $this->author = $author;
        $this->comment = $comment;
        $this->location = $location;
        $this->id = $id;
    }
    public function getID(){
        return $this->id;
    }
    public function getComment(){
        return $this->comment;
    }
    public function getLocation(){
        return $this->comment;
    }
    public function getAuthor(){
        return $this->author;
    }
}