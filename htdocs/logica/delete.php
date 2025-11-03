<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../listar.php");
        exit();
    } else {
        echo "Error al eliminar: " . $conn->error;
    }
}
?>