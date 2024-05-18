<?php
include "config/config.php";
    if (isset($_POST['update'])) {
        $stu_id = $_POST['stu_id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $sql = "UPDATE `students` SET `name`='$name',`age`='$age',`email`='$email' WHERE `id`='$stu_id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: view-student.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id='$stu_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $email = $row['email'];
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update data</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>
    <body>
    <div class="container-fluid">
      <h2>Update Data</h2>  
    <form  action="" method="post">
       <div class="form-group">
        <label for="InputName">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="stu_id" value="<?php echo $id; ?>">
       </div>

       <div class="form-group">
        <label > Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $age; ?>">
       </div>

       <div class="form-group">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="<?php echo $email; ?>">
        <small id="emailHelp" class="form-text text-muted">Your email is stored in database</small>
       </div>
       <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>
    </body>
    </html>



    <?php
    } else{
        header('Location: view-student.php');
    }
}
?>