<?php
    $connection_to_db = new MongoClient();
    $collection= $connection_to_db-> testsite -> ToDoList;
    $document_for_delete=array("value" => $_GET["item"]);
    $options = array ("justOne" => true);
    $collection -> remove($document_for_delete, $options);
    $connection_to_db -> close();
?>