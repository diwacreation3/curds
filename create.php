<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student database</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Student Information: </legend>
            Name: <br>
            <input type="text" name="name" > <br>
            Age: <br>
            <input type="text" name="age" > <br>
            Email: <br>
            <input type="email" name="email"> <br>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
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