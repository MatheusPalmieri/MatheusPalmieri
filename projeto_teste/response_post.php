<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_teste";

if (isset($_POST['name']) && null !== $_POST['name'] AND !empty($_POST['name'])){
    $nome = $_POST['name'];
} else {
    $nome = "qualquer";
}
if (isset($_POST['message']) && null !== $_POST['message'] AND !empty($_POST['message'])){
    $message = $_POST['message'];
} else {
    $message = "qualquer";
}
if (isset($_POST['email']) && null !== $_POST['email'] AND !empty($_POST['email'])){
    $email = $_POST['email'];
} else {
    $email = "qualquer";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name, email, message)
VALUES ('{$nome}', '{$email}', '{$message}')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>