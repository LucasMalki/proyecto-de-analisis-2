<?php
    
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "../assets/inicio.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estylo.css">
</head>
<body>
<div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php" id="producto-link">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proveedores.php" id="proveedores-link">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clientes.php" id="clientes-link">Clientes</a>
                </li>
                <li class="nav-item">
                <a href="login_usuario_be.php" id="cerrar-sesion-btn">Cerrar Sesión</a>
                </li>
                    
               
                <!-- Agrega más módulos según tus necesidades -->
            </ul>
        </div>
        <div class="contenido">
            <h1>BIENVENIDO AL AUTOSERVICIO ANDREA</h1> 
        </div>
        <footer>
                <p>©Malkiewiez Lucas, Gonzalez Gaston, Caceres Cecilia, Caceres Alan</p>
        </footer>
        
</body>
</html>