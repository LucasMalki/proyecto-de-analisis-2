<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: ../assets/bienvenida.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Y Registro - Cositas </title> 
    <link rel="stylesheet" href="../assets/estilos.css">
</head>
<body>

 <main>
     <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesión">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
        </div>
        <!--Formulario de Login y Registro-->
        <div class="contenedor__login-register">
            <!--Login-->
            <form action="login_usuario_be.php" method="POST"
             class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="password" placeholder="Contrasena" name="contrasena">
                <button>Entrar</button>
            </form>
            <!--Registro-->
            <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo"> 
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contrasena" name="contrasena">
                <button>Registrarse</button>
            </form>
        </div>
    </div>
 </main>

    <script src="../assets/script.js"></script>
</body>
</html>