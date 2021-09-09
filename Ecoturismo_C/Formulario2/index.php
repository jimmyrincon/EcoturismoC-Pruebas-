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
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario De Registro</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
	<div class="contenedor">
		<form action="#" class="formulario2" id="formulario2" name="formulario2" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="documento" placeholder="Numero de Documento">
				<input type="text" name="nombres" placeholder="Nombres y Apellidos">
				<input type="text" name="telefono" placeholder="Numero Telefonico">
				<input type="text" name="ciudad" placeholder="Ciudad De Ubicación">
				<input type="text" name="correo" placeholder="Correo Electrónico">

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="MASCULINO">
					<label class="label-radio hombre" for="hombre">hombre</label>

					<input type="radio" name="sexo" id="mujer" value="FEMENINO">
					<label class="label-radio mujer" for="mujer">mujer</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		<div class="tabla">
			<table>
				<tr>
					<th>Documento</th>
					<th>Nombres</th>
					<th>Telefono</th>
					<th>Ciudad</th>
					<th>Correo</th>
					<th>Genero</th>
				</tr>
			</table>
		</div>
	</div>
	<script src="formulario2.js"></script>
</body>
</html>

<?php
	if(isset($_POST['registrarse'])){
		$documento= $_POST ["documento"];
		$nombres= $_POST ["nombres"];
		$sexo= $_POST ["sexo"];
		$correo= $_POST ["correo"];
		$telefono= $_POST ["telefono"];
		$ciudad= $_POST ["ciudad"];

		$insertarDatos = "INSERT INTO usuarios VALUES('$documento',
													'$nombres',
													'$sexo',
													'$correo',
													'$telefono',
													'$ciudad')";
		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		If(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
