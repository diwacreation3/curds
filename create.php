<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container-fluid">
      <h2>Student </h2>  <a class="btn btn-info" href="view-student.php">View</a>
    <form  action="" method="post">
       <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
       </div>

       <div class="form-group">
        <label > Age</label>
        <input type="text" name="age" class="form-control" placeholder="Your age">
       </div>

       <div class="form-group">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your Email">
        <small id="emailHelp" class="form-text text-muted">Your email is stored in database</small>
       </div>
       <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</div>
</body>
</html>

<?php

include "config/config.php";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `students` (`name`, `age`, `email`) 
    VALUE ('$name', '$age', '$email')" ;

    $result = $conn->query($sql);
    if($result == TRUE)
    {
        echo "New Record Create Sucessfully. ";
        header('Location: view-student.php');
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

?>