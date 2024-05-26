<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "databases"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$sql = "SELECT * FROM servicios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='servicio'>";
        echo "<h2>" . $row["nombre"] . "</h2>";
        echo "<p>" . $row["descripcion"] . "</p>";
        echo "<img src='" . $row["imagen"] . "' alt='Imagen del servicio'>";
        echo "</div>";
    }
} else {
    echo "No se encontraron servicios.";
}

$conn->close();
?>
