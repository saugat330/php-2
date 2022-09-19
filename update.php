<?php

include('./db_config.php');

if(isset($_POST['updated']))

{
    $id = $_POST['id'];
    
    $change =$_POST['todo'];
    
    $query="UPDATE todo_list set title='$change' where id='$id'";
    
    $resultss=$con->query($query);

    header('location:./form.php');

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>update</title>
</head>
<body>
<form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_POST['id']?>">

        <input type="text" name="todo" value="<?php echo $_POST['todo']?>">

        <button name="updated" type="submit" class="btn btn-success">Update</button>

      </form>

</body>
</html>