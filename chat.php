<?php
$servername = "sql7.freesqldatabase.com";
$username = "sql7611364";
$password = "3bi3v1jHS5";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
   die("Ошибка подключения: " . $conn->connect_error);
}
echo "Успешное подключение";
?>
