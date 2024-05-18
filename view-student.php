<?php

include "config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Student Details</h2>
    </div>

    <table class="table">
        <thead>
            <tr>
             <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Action</th>   
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);
            if($result-> num_rows > 0)
            {
                while($row = $result->fetch_assoc()) {
            
            ?>
            
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?>  </td>
                <td><?php echo $row['age']; ?></td>
                <td> <?php echo $row['email']; ?> </td>
                <td><a class="btn btn-info" href="update-student.php? id = <?php echo $row['id']; ?>">Edit</a> </td>
                &nbsp;
                <td><a class="btn btn-danger" href="delete-student.php? id = <?php echo $row['id']; ?>">Delete</a> </td>
            </tr>
        
    
        <?php } } ?>
           
        </tbody>
    </table>
</body>
</html>