<?php
// Connect to database
$servername = "db"; // Имя сервиса MySQL в docker-compose.yml
$username = "root_mysql"; // Имя пользователя MySQL
$password = "12345"; // Пароль пользователя MySQL
$dbname = "autospasibo"; // Имя базы данных

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch last 10 reviews from database
$sql = "SELECT * FROM reviews ORDER BY id DESC LIMIT 10";
$result = $conn->query($sql);
$reviews = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

echo json_encode($reviews);

$conn->close();
?>
