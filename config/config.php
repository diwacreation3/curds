<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_curd";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("Conection failed: " . $conn->connect_error );
}

?>