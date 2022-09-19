<?php

include('./db_config.php');

 $sql="select * from todo_list";

 $result= $con->query($sql);

 echo"<br>";

 print_r($result);

 // $row = $result->fetch_assoc();

 //print_r($row);

 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container py-3">
   
            <form action="save-todo.php" method="POST">
                    <input type="text" placeholder="Add todo" name="todo"><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>

           </form>
        <table class="table">
  <thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">TODO</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
      while($row =$result->fetch_assoc()){ ?>
      <tr>
  
        <td><?php echo ($row['id']) ?></td>

        <td><?php echo ($row['title']) ?></td>

        <form action="delete.php" method="post">

         <td><button name="DELE" class="btn btn-danger">Delete</button></td>

         <input type="hidden" name="id" value="<?php echo $row['id']?>">

        </form>

        <form action="update.php" method="post">
        

        <td><button  type="submit" class="btn btn-success">Update</button></td>

        <input type="hidden" name="id" value="<?php echo $row['id']?>">

        <input type="hidden" name="todo" value="<?php echo $row['title']?>">

      </form>

       <?php // }bracket is of php 
       
 
       }
   ?>
  </tbody>
 </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>