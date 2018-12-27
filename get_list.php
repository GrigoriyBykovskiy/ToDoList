<?php
    try {
        $connection_to_db = new MongoClient("mongodb://127.0.0.1:27017");
        $collection= $connection_to_db -> testsite -> ToDoList;
        $list = $collection -> find();
        while($document = $list -> getNext()){
            echo '<tr id="base_'.$document["value"].'"> <td width="50%" align="center">'.$document["value"].'</td> <td width="50%" align="center"> <button id="'.$document["value"].'" onclick="delete_item(this.id)">delete</button> </td> </tr>';
        }
        $connection_to_db -> close();
    } catch(MongoConnectionException $e) {
       header("HTTP/1.0 500 Server Mongodb is not avalaible");
    }
?>