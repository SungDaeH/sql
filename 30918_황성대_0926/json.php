<?php
header('Content-Type: application/json; charset=uft-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webcontent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
echo(json_encode(array("name" => $name, "email" => $email)));

$sql = "INSERT INTO member (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "데이터가 생성되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn)
?>
