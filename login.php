<?php
require_once("db.php");

$pass = $_POST['pass'];
$email = $_POST['email'];

if(empty($email) || empty($pass)){
    echo "Ви не можете зайти так як ви не заповнили всі поля";
} else {
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND pass = '$pass' ";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0 ){
        while($row = $result -> fetch_assoc()){
            echo "Вітаємо вас на вашій сторінці" . $row['fullname'];

        }
    } else {
        echo "У вас немає облікового запису! ";
    }
}
