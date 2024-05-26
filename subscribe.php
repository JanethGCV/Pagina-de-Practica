<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "databases";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO contacto (correo, telefono) VALUES ('$correo', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
