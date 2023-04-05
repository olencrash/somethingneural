<?php
$servername = "sql7.freesqldatabase.com";
$username = "sql7611364";
$password = "3bi3v1jHS5";
$dbname = "sql7611364";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$nickname = $_POST['nickname'];
$message = $_POST['message'];

// SQL запрос для добавления данных в таблицу
$sql = "INSERT INTO messages (nickname, message) VALUES ('$nickname', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
