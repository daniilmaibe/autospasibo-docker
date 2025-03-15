<?php
// Connect to database
$servername = "localhost";
$username = "root_mysql"; // Enter your MySQL username
$password = "12345"; // Enter your MySQL password
$dbname = "autospasibo"; // Enter your database name

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
