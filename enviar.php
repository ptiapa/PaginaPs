<?php 
    $destino = "pjtiapa2810@gmail.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo . "\nMensaje: " . $mensaje;
    mail($destino, $asunto, $contenido);
    header("Location:enviado.html"); 
?>