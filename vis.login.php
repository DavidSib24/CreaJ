<?php
    require_once('Controlador/login.php');
    $error = '';

    if(isset($_SESSION['Id_Usuario'])){
        $url = BASE_URL.'indexprueba.php';
        header("Location: $url");

    }


    if(!empty($_POST['btnLogin'])){
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];

        if(strlen(trim($username)) > 1 && strlen(trim($contrasena)) > 1){
            $error = login($username,$contrasena);
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
    <link rel="stylesheet" href="estilos/login.css">
    <title>Inicio Sesión | GREENCYCLE</title>
</head>
<body>
    <section class="pic">
    </section>
    <section class="form">
        <form method="post" name="login" action="vis.login.php">
            <h1>Inicia Sesión</h1>
            <input type="text" name="username" placeholder="Nombre o correo" require>
            <input type="password" name="contrasena" placeholder="Contraseña" require>
            <div class="boton">
                <input class="btn" type="submit" name="btnLogin" value="Iniciar Sesion">
            </div>
            <div class="errorMsg"><?php echo $error; ?></div>
            <p>¿No cuentas con una cuenta?, Registrate <a href="vis.registro.php">AQUI</a></p>
        </form>
    </section>
    
</body>
</html>
