<?php
include("db.php");

if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../registro.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>