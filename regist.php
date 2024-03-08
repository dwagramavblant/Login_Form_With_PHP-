<?php 
require_once('db.php'); 
$login = $_POST['fullname'];
$pass = $_POST['pass'];
$email = $_POST['email'];


$sql = "INSERT INTO `users` (full_name,pass,email) VALUES ('$login', '$pass', '$email')";
if($conn -> query($sql) === TRUE){
    echo "Вітаю ви успішно зареєстровані";}
    else{
        echo "Щось пішло не так " . $conn -> error ;
    }