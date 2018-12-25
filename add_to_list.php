<?php
    $connection_to_db = new MongoClient();
    $collection= $connection_to_db-> testsite -> ToDoList;
    $document_for_add=array("value" => $_GET["item"]);
    $collection -> insert($document_for_add);
    $connection_to_db -> close();
?>