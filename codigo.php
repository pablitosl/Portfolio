<?php
//Guardado de los datos del formulario 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
//$servicio = $_POST['opcionesSelect'];

//Armado del mail
$to = 'pablocastrod7@gmail.com';
$email_subject = "Nuevo mensaje: de la web"; 
$email_body = "Haz recibido un nuevo mensaje 
            \n Nombre: $nombre 
            \n Correo: $email
            \n Consulta por el siguiente servicio: $asunto 
            \n Mensaje o consulta: \n $mensaje \n"; 
$headers = "From: $email";

//Envió del mail
mail($to, $email_subject, $email_body, $headers); 
echo 'Pronto nos estaremos comunicando con usted!';
?>
<br>
<br>
<button><a href="index.html">Volver</a></button>