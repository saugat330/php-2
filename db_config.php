<?php 
    //connection with database
    $con= new mysqli('localhost:3306','root','','todo');


    if($con->connect_error){
        die($conn->connect_error);
    }else{
    echo"success";
    }

?>