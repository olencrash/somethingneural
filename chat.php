<?php
$servername = "sql7.freesqldatabase.com";
$username = "sql7611364";
$password = "3bi3v1jHS5";
$dbname = "chatlog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к серверу: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $nickname = $_POST['nickname'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO chatlog (nickname, message) VALUES ('$nickname', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Данные успешно записаны в базу данных";
    } else {
        echo "Ошибка: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
