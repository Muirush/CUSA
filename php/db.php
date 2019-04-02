<?php
$servername ="localhost";
$username = "root";
$password =  "";
$dbname = "contacts";
//creating connection.
$conn = new mysqli($servername, $username, $password, $dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contactstable(name, email, message) VALUES('$name', '$email', '$message')";
mysqli_query($conn, $query);
 ?>