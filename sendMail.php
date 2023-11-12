<?php 
	$nombre = $_POST['name'];
    $email = $_POST['email'];
    //$subject = $_POST['subject'];
    $message = $_POST['message'];

	//$asunto = 'Contacto Fuego y Carnes'.$subject;

	$asunto = 'Contacto Fuego y Carnes'.$name;
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['message'];


	if(mail('fuegoycarnesadomicilio@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>