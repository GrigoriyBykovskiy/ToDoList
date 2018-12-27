<?php
    try{
        $connection_to_db = new MongoClient();
        $collection= $connection_to_db-> testsite -> ToDoList;
        $document_for_delete=array("value" => $_GET["item"]);
        $options = array ("justOne" => true);
        $collection -> remove($document_for_delete, $options);
        echo "base_".$document_for_delete["value"];
        $connection_to_db -> close();
    } catch(MongoConnectionException $e) {
       header("HTTP/1.0 500 Server Mongodb is not avalaible");
    }
?>