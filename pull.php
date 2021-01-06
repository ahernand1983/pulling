<?php
$destino ="contacto@miserver.com";
$asunto = "Contacto Web";
$cabeceras = "Content-type: text/html";
$cuerpo ="Hola, alguien te ha contactado por el formulario Web de tu sitio<br>
Los datos enviados son los siguientes:<br>
<b>Nombre:</b>$nombre<br>
<b>email:</b>$email<br>
Y envio el siguiente comentario: <hr>
<pre>
$comentario
</pre>";

mail($destino,$asunto,$cuerpo,$cabeceras);

echo “Se ha enviado el mensaje correctamente”;
?>

Fuente: https://www.ejemplode.com/20-php/66-ejemplo_de_correo_o_email_en_php_con_html.html#ixzz6io3QSW32
