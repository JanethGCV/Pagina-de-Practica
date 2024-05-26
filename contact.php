<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "databases";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contacto (nombre, apellido, correo, telefono, mensaje) VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
