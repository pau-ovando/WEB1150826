<?php include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
    $user = $result->fetch_assoc();
}

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../listar.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Actualizar Usuario</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="contenedor">
        <h3 class="center orange-text">Actualizar Usuario</h3>
        <div class="row">
            <form class="col s12" action="update.php" method="POST">    
                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombre" name="nombre" type="text" value="<?php echo $user['nombre']; ?>" required>
                        <label for="nombre">Nombre</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" value="<?php echo $user['email']; ?>" required>
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="telefono" name="telefono" type="text" value="<?php echo $user['telefono']; ?>" required>
                        <label for="telefono">Teléfono</label>
                    </div>
                </div>

                <div class="row center">
                    <button class="btn waves-effect waves-light orange" type="submit" name="actualizar">
                        Actualizar usuario <i class="material-icons right">send</i>
                    </button>

                    <button class="btn grey lighten-1" type="button" onclick="window.location.href='../listar.php'">
                        Regresar a Listado de Usuarios
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script>
        // Etiquetas flotantes
        document.addEventListener('DOMContentLoaded', function() {
        M.updateTextFields();
        });
    </script>

</body>
</html>