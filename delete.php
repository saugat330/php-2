<?php
$con= new mysqli('localhost:3306','root','','todo');
include('./db_config.php');

if(isset($_POST['DELE']))
{
    $id = $_POST['id'];
    
    $query="DELETE FROM todo_list where id='$id'";
    
    $resultss=$con->query($query);

    header('location:./form.php');

}

?>