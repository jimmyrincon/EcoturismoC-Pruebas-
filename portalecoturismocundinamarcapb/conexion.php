<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="clientes";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	If(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css"></head>
<body>

    <header class="site-header">
        <div class="contenedor contenido-header">
            <div class="barra">
                 <a href="/">
                     <img src="img/logo.svg" alt="Logo Bienes Raices">
                 </a>

                <nav class="navegacion">
                    <a target="_blank" href="nosotros.html">Nosotros</a>
                    <a href="anuncios.html">Anuncios</a>
                    <a href="blog.html">Blog</a>
                    <a href="contacto.html">Contacto</a>
                </nav>
            </div> <!--barra-->
        </div> <!--contenedor-->
</header>

<h1 class="fw-300 centrar-texto">Contacto</h1>
<img src="img/destacada3.jpg" alt="Imagen Contacto">
<main class="contenedor seccion contenido-centrado">
    <div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">

    <h2 class="fw-300 centrar-texto">DILIGENCIA EL FORMULARIO DE CONTACTO</h2>

    <form class="contacto" action="">
 
        <fieldset>
        <Legend>Información Personal</Legend>
        <label for="documento">Numero Documento Identidad:</label>
        <input type="docu" id="documento" placeholder="Ingresa el numero de documento de identidad">

        <label for="nombres">Apellidos y Nombres:</label>
        <input type="text" id="nombres" placeholder="Ingresa tus Apellidos y Nombres">

        <label for="genero">Genero:</label>
        <input type="text" id="genero" placeholder="Ingresa tu genero">

        <label for="correo">Correo Personal:</label>
        <input type="email" id="correo" placeholder="Ingresa tu Email" required>

        <label for="telefono"> Teléfono Personal:</label>
        <input type="tel" id="telefono" placeholder="Ingresa tu numero teléfonico de contacto" required>

        <label for="ciudad"> Ciudad en la cual vive actualmente:</label>
        <input type="text" id="ciudad" placeholder="Ingresa el nombre de la ciudad en la cual vive actualmente" required>

        <label for="mensaje">Espacio para tus comentarios o inquietudes:</label>
        <textarea name="mensaje" id="mensaje"></textarea>
    </fieldset>

        <input type="submit" value="Enviar" class="boton boton-verde">
    </form>

</main>

<?php
    $documento = $_GET ["documento"];
    $nombres = $_GET ["nombres"];
    $genero = $_GET ["genero"];
    $correo = $_GET ["correo"];
    $telefono = $_GET ["telefono"];
    $ciudad = $_GET ["ciudad"];
    $mensaje = $_GET ["mensaje"];
?>

<footer class="site-footer seccion">
     <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a target="_blank" href="nosotros.html">Nosotros</a>
            <a href="anuncios.html">Anuncios</a>
            <a href="blog.html">Blog</a>
            <a href="contacto.html">Contacto</a>
        </nav>

        <p class="copyright">Todos los derechos reservados 2020©</p>
     </div>


    </footer>

</body>
</html> 