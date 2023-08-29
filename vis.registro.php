<?php

    require_once('Controlador/registro.php');
    require_once('Modelo/class.usuario.php');
    
    $error = "";

    session_start();

    if(isset($_SESSION['Id_Usuario'])){
        header("location: index.php");
    }

    if(!empty($_POST['btnRegistrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $contrasena = $_POST['contrasena'];
        $correo = $_POST['correo'];

        if(strlen(trim($nombre)) > 0 && strlen(trim($apellido)) > 0 &&  strlen(trim($contrasena)) > 0 && strlen(trim($correo)) > 0){
            $error = registro($nombre,$apellido,$correo,$contrasena);
        }else{
            $error = "<h2>Por favor llene los campos</h2>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/registro.css">
    <title>Registro | GREENCYCLE </title>
</head>
<body>
    <section class="form">
        <form method="post" action="" name="registro" enctype="multipart/form-data" >
            <h1>REGISTRO</h1>
            <input placeholder="Nombre" name="nombre" type="text" require />
            <input placeholder="Apellido" name="apellido" type="text" require />
            <input placeholder="Correo" name="correo" type="mail" require/>
            <input placeholder="Contraseña" name="contrasena" type="password" require />
            <div class="boton">
                <input class="btn" type="submit" name="btnRegistrar" value="Registrarse" />
            </div>
            <div class="errorMsg"><p><?php echo $error; ?></p></div>
            <p>¿Ya cuentas con una cuenta?, accede <a href="vis.login.php">AQUI</a></p>
        </form>
    </section>
    <section class="pic">
    </section>
</body>
</html>