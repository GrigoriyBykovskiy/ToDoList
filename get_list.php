<?php
    $connection_to_db = new MongoClient();
    $collection= $connection_to_db -> testsite -> ToDoList;
    $list = $collection -> find();
    while($document = $list -> getNext()){
        echo '<tr> <td width="50%" align="center">'.$document["value"].'</td> <td width="50%" align="center"> <button id="'.$document["value"].'" name="'.$document["value"].'" onclick="delete_item(this.id)">delete</button> </td> </tr>';
    }
    $connection_to_db -> close();
?>