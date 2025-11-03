<?php include("./header.php"); ?>

<div class="contenedor">
    <h3 class="center orange-text">Registro de Nuevo Usuario</h3>
</div>

<div class="row">
    <form class="col s12" action="./logica/create.php" method="POST">
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="nombre" name="nombre" type="text" required>
                <label for="nombre">Nombre</label>
            </div>

            <div class="input-field col s12 m6">
                <input id="email" name="email" type="email" required>
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12 m6">
                <input id="telefono" name="telefono" type="text" required>
                <label for="telefono">Teléfono</label>
            </div>
        </div>

        <div class="center">
            <button class="btn waves-effect waves-light orange" type="submit" name="agregar">
                Agregar Usuario <i class="material-icons right">send</i> <!-- Icono de enviar -->
            </button>

            <button class="btn grey lighten-1" type="button" onclick="window.location.href='./index.php'">
                Regresar a Inicio
            </button>
        </div>
    </form>
</div>

<?php include("./footer.php"); ?>