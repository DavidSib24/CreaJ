<?php

require_once("Modelo/class.conexion.php");
require_once("Modelo/class.usuario.php");

session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos a Green Cycle</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="shortcut icon" href="imagenes/icono.png" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.html">
</head>

<body>
    <header>
        <div class="header">
            <input type="checkbox" id="btn-menu">
              <label for="btn-menu">
            <div class="ham-box">
              <div class="hamburger">
                  <div class="_layer -top"></div>
                  <div class="_layer -mid"></div>
                  <div class="_layer -bottom"></div>
              </div>
            </div>
            </label>
            <nav id="menu">
              <ul>
                <a class="menA" href="indexprueba.php"><li>Inicio</li></a>
                <a class="menA" href="PortaLogin.html"><li>Contenido</li></a>
                <a class="menA" href="AcercaLogin.html"><li>Sobre Nosotros</li></a>
                <a class="menA" href="Antesley.html"><li>Leyes</li></a>
                <a class="menA" href="contactos.html"><li>Contactanos</li></a>
                <?php
                
                if(isset($_SESSION['Id_Usuario'])){
                    ?>
                    <a class="menA" href="Controlador/logout.php"><li>Cerrar Sesión</li></a>
                    <?php
                }else{
                    ?>
                    <a class="menA" href="vis.login.php"><li>Login</li></a>
                    <?php
                }
                ?>
              </ul>
            </nav>
        </div>
        <section class="textos-header">
            <h1>"Bienvenidos a Green Cycle"</h1>
            <h2>"Recicla, Renueva, Revive"</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">¿Que podemos hacer reciclando?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="Imagenes/Index/Importancia.jpg" width="500" height="240" alt="logo reciclaje, rodeado de botellas, vidrio y papel" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>En que aporta el Reciclaje</h3>
                    <p>El reciclaje es un proceso mediante el cual los materiales que han sido descartados, como papel, plástico, vidrio y metal, se recolectan, clasifican y transforman en nuevos productos, reduciendo así la necesidad de utilizar recursos naturales y evitando la acumulación de desechos en vertederos o la contaminación del medio ambiente.</h3>   
                </div>
            </div>
           
        </section>

        <section class="contenedor sobre-nosotros">
            
            <div class="contenedor-sobre-nosotros">
                <img src="Imagenes/Index/Manualidad.jpg" width="500" height="240" alt="Manualidades que se pueden realizar con botellas de plastico" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>2</span>Manualidades con materiles reciclados</h3>
                    <p>-Marco de fotos con revistas
                        <br>
                        -Macetas hechas con botes
                        <br>
                        -Porta vasos
                        <br>
                        -Bolso con pantalón viejo
                        <br>
                        -Porta lapiceros con latas
                        <br>
                        -Floreros hechos con frascos</h3>
                                               
                      
                </div>
            </div>
           
        </section>                 
       
           <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Beneficios sobre el reciclaje</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="Imagenes/Index/ManosTierra.jpg" alt="Manos, con una planta">
                        <h3>Conservación de recursos naturales</h3>
                        <p>El reciclaje ayuda a conservar los recursos naturales, como el agua, la madera y los minerales. Al reciclar materiales como el papel, el plástico y el vidrio, se reduce la necesidad de extraer y procesar nuevas materias primas de la naturaleza. </p>
                    </div>
                    <div class="servicio-ind">
                        <img src="Imagenes/Index/Reciclaje.jpg" alt="mano sosteniendo un cartón con el logo de reciclaje">
                        <h3>Reducción de la contaminación</h3>
                        <p>El reciclaje contribuye a reducir la contaminación del aire, el agua y el suelo. Al reciclar materiales en lugar de enviarlos a vertederos o incineradoras, se evita la liberación de contaminantes tóxicos y se reduce la emisión de gases de efecto invernadero. Además, al reciclar papel, se reduce la necesidad de talar árboles, lo que a su vez ayuda a mantener los bosques, importantes sumideros de carbono.</p>
                    </div>
                   
                    <div class="servicio-ind">
                        <img src="Imagenes/Index/Foco.jpg" alt="Foco encendido en la tierra">
                        <h3>Ahorro de energía </h3>
                        <p> El reciclaje también puede ayudar a ahorrar energía y reducir las emisiones de gases de efecto invernadero. La producción de nuevos productos a partir de materiales reciclados generalmente requiere menos energía en comparación con la producción a partir de materias primas virgenes.  </p>
                        
                </div>
                
                
            </div>
        </section>
    </main>
    
    <div class="title-cards">
		<h2>Consejos sobre el reciclaje</h2>
	</div>
<div class="container-card">
	
<div class="card">
	<figure>
		<img src="Imagenes/Index/Basureros.jpg" alt="basureros para reciclar">
	</figure>
	<div class="contenido-card">
		<h3>Separación de residuos</h3>
		<p>Antes de tirarlos, se deben separar para poder depositarlos en el contenedor que les corresponde. Lo ideal es contar con recipientes independientes. Con un solo cubo con separadores es suficiente.</p>
		<a href="https://www.gaceta.unam.mx/la-separacion-de-residuos-una-responsabilidad-de-todos">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="Imagenes/Index/botellasPlastico.jpeg" alt="Botellas de plástico">
	</figure>
	<div class="contenido-card">
		<h3>Limpiar envases</h3>
		<p>Otro consejo de los expertos es limpiar los envases antes de llevarlos al contenedor. En cuanto a las botellas de aceite o los envases de productos cosméticos y de limpieza, no se tiene que enjuagar porque provoca vertidos tóxicos en el agua</p>
		<a href="https://mag.elcomercio.pe/respuestas/trucos-de-limpieza-como-desinfectar-los-envases-de-plastico-de-manera-sencilla-remedios-hacks-nndamn-noticia/">Leer Màs</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="Imagenes/Index/Ropa.jpg" alt="ropa usada">
	</figure>
	<div class="contenido-card">
		<h3>Ropa usada </h3>
		<p>La ropa también es reciclable. Solamente hay que llevarla a los puntos habilitados para ello. Muchas marcas y entidades tienen programas para venderla como artículo de segunda mano o que sea reutilizada para la elaboración de otros materiales.</p>
		<a href="https://blog.oxfamintermon.org/ropa-usada-ideas-para-reciclar/">Leer Màs</a>
	</div>
</div>
</div>


<footer>
    <div class="contenedor-footer">
        <div class="content-foo">
            <h4>Phone</h4>
            <p>7521-5460</p>
        </div>
        <div class="content-foo">
            <h4>Email</h4>
            <p>greencycle2023@gmail.com</p>
        </div>
        <div class="content-foo">
            <h4>Ubicación</h4>
            <p>Colegio Don Bosco</p>
        </div>
    </div>
    <h2 class="titulo-final">&copy; Ariel Ismael      | Rivas Chacón</h2>
    <h2 class="titulo-final">&copy; David Alessandro  | Sibrian Castillo</h2>
    <h2 class="titulo-final">&copy; Kevin Alexander   | Zepeda Velásquez</h2>
    <h2 class="titulo-final">&copy; Edgardo Alejandro | Sanchez Guevara</h2>

        

</footer>

</body>

</html>