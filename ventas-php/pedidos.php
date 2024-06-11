<?php
include_once "encabezado.php";
include_once "navbar.php";
include_once "funciones.php";
session_start();
if(empty($_SESSION['idUsuario'])) header("location: login.php");

$usuarios = obtenerUsuarios();
?>
<div class="container">
    <h1>
        <a class="btn btn-success btn-lg" href="agregar_pedidos.php">
            <i class="fa fa-plus"></i>
            Realizar
        </a>
        Pedidos
    </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Info del pedido</th>
                <th>Detale del producto</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($usuarios as $usuario){
            ?>
                <tr>
                    <td><?php echo $usuario->info_del_pedido; ?></td>
                    <td><?php echo $usuario->detalle_del_producto; ?></td>
                    <td>
                        <a class="btn btn-info" href="editar_usuario.php?id=<?php echo $usuario->id; ?>">
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="eliminar_usuario.php?id=<?php echo $usuario->id; ?>">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>