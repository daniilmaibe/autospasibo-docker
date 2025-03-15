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

// Get data from POST request
$carNumber = $_POST["carNumber"];
$rating = $_POST["rating"];
$reviewText = $_POST["reviewText"];

// Insert review into database
$sql = "INSERT INTO reviews (car_number, rating, review_text) VALUES ('$carNumber', $rating, '$reviewText')";
if ($conn->query($sql) === TRUE) {
    $response = array("success" => true);
} else {
    $response = array("success" => false);
}

echo json_encode($response);

$conn->close();
?>
