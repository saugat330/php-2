<?php 
//importing file


include('./db_config.php');


if($_SERVER['REQUEST_METHOD']=="POST"){


    $todo_item =$_POST['todo'];
    echo "you have entered " .$todo_item;
    $sql="INSERT INTO todo_list(`title`) VALUES('$todo_item')";
    $result= $con->query($sql);
    header('location:./form.php');


}