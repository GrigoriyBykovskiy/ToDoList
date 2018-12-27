<?php
    try {
        $connection_to_db = new MongoClient("mongodb://127.0.0.1:27017");
        $collection= $connection_to_db-> testsite -> ToDoList;
        $document_for_add=array("value" => $_GET["item"]);
        $collection -> insert($document_for_add);
        echo $document_for_add["value"];
        $connection_to_db -> close();
    } catch(MongoConnectionException $e) {
       header("HTTP/1.0 500 Server Mongodb is not avalaible");
    }
?>