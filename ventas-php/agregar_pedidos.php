<?php
include_once "encabezado.php";
include_once "navbar.php";
session_start();

if(empty($_SESSION['usuario'])) header("location: login.php");

?>
<div class="container">
    <h3>Agregar pedidos</h3>
    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" name="nombre del producto" class="form-control" id="nombre del producto" placeholder="Ingresa el nombre del producto">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="int" name="cantidad" class="form-control" id="cantidad" placeholder="Ingrese la cantidad">
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" id="marca" placeholder="Ingrese la marca">
        </div>

        <div class="text-center mt-3">
            <input type="submit" name="realizar pedido" value="Realizar pedido" class="btn btn-primary btn-lg">
            
            </input>
            <a href="pedidos.php" class="btn btn-danger btn-lg">
                <i class="fa fa-times"></i> 
                Cancelar
            </a>
        </div>
    </form>
</div>
<?php
if(isset($_POST['realizar pedido'])){
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $marca = $_POST['marca'];
    if(empty($nombre) 
    || empty($cantidad) 
    || empty($marca)){
        echo'
        <div class="alert alert-danger mt-3" role="alert">
            Debes completar todos los datos.
        </div>';
        return;
    } 
    
    include_once "funciones.php";
    $resultado = realizarPedido($nombre, $cantidad, $marca);
    if($resultado){
        echo'
        <div class="alert alert-success mt-3" role="alert">
            Pedido realizado con éxito.
        </div>';
    }
    
}
?>