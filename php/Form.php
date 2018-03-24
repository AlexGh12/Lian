<?php 
	
	if 	(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
		isset($_POST["asunto"]) && !empty($_POST["asunto"]) &&
		isset($_POST["mail"]) && !empty($_POST["mail"]) &&
		isset($_POST["mensaje"]) && !empty($_POST["mensaje"]))	{

			$nombre = $_POST["nombre"] ;
			$asunto = $_POST["asunto"] ;
			$mail = $_POST["mail"] ;
			$mensaje = $_POST["mensaje"] ;

			mail("a-l-e-x_1379@hotmail.com", $mail, $nombre, $mensaje)

			echo "Gracias por sus comentarios";
		
	}

 ?>