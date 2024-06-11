<?php
include_once "encabezado.php";
include_once "navbar.php";
session_start();

if(empty($_SESSION['usuario'])) header("location: login.php");

?>
<div class="container">
    <h3>Agregar proveedor</h3>
    <form method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escribe el nombre completo del proveedor">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ej. 2111568974">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ej. Av Collar 1005 Col Las Cruces">
        </div>
        <div class="mb-3">
            <label for="producto" class="form-label">Productos</label>
            <input type="text" name="producto" class="form-control" id="producto" placeholder="Ingresa el producto">
        </div>

        <div class="text-center mt-3">
            <input type="submit" name="registrar" value="Registrar" class="btn btn-primary btn-lg">
            
            </input>
            <a href="provedores.php" class="btn btn-danger btn-lg">
                <i class="fa fa-times"></i> 
                Cancelar
            </a>
        </div>
    </form>
</div>
<?php
if(isset($_POST['registrar'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $producto = $_POST ['producto'];
    if(empty($nombre) 
    || empty($telefono) 
    || empty($direccion)
    || empty($producto)){
        echo'
        <div class="alert alert-danger mt-3" role="alert">
            Debes completar todos los datos.
        </div>';
        return;
    } 
    
    include_once "funciones.php";
    $resultado = registrarproveedor($nombre, $telefono, $direccion, $producto);
    if($resultado){
        echo'
        <div class="alert alert-success mt-3" role="alert">
            Proveedor registrado con éxito.
        </div>';
    }
    
}
?>