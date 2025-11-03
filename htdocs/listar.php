<?php include("./header.php"); ?>
<?php include("./logica/db.php"); ?>

<main>
    <div class="contenedor">
        <h3 class="center orange-text">Listado de Usuarios</h3>
        <div class="row">
            <div class="col s12">
                <table class="highlight centered responsive-table">
                    <thead class="orange lighten-2 white-text">
                        <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "SELECT * FROM usuarios";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>{$row['id']}</td>
                                        <td>{$row['nombre']}</td>
                                        <td>{$row['email']}</td>
                                        <td>{$row['telefono']}</td>
                                        <td>
                                            <a href='./logica/update.php?id={$row['id']}' class='btn-small waves-effect waves-light orange'>
                                                Editar <i class='material-icons left'>edit</i>
                                            </a>
                                            <a href='./logica/delete.php?id={$row['id']}' class='btn-small waves-effect waves-light red' onclick='return confirm(\"¿Está seguro de eliminar este usuario?\")'>
                                                Eliminar <i class='material-icons left'>delete</i>
                                            </a>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No hay usuarios registrados.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</main>

<?php include("./footer.php"); ?>