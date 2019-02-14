<?php
class Controller{
    public function getComments($location){
        $comments = array();
        $db = Connection::connect();
        $sql = "SELECT * FROM comentarios WHERE destino = ?";
        $stmt = $db->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param("s", $location);
        if($stmt->execute()){
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $comment = new Comment($row["id"], $row["autor"], $row["comentario"], $row["destino"]);
                array_push($comments, $comment);
            }
            $stmt->close();
            $db->close();
            return $comments;
        }
        $stmt->close();
        $db->close();
        return null;
    }
    public function addComment($author, $comment, $location){
        //$comment = new Comment(null, $author, $comment, $location);
        $db = Connection::connect();
        $sql = "INSERT INTO comentarios (autor, comentario, destino) VALUES (?,?,?)";
        $stmt = $db->stmt_init();
        $stmt->prepare($sql);
        $stmt->bind_param("sss", $author, $comment, $location);
        if($stmt->execute()){
            $stmt->close();
            $db->close();
            return true;
        }
        $stmt->close();
        $db->close();
        return false;
    }
}