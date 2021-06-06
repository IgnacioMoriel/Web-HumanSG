<?php  

    $destinatario ='vaneliss.moscol@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde Sitio Web vanessamoscol.alwaysdata.net \n\n ";
    $asunto;
    $mensajeCompleto = $mensaje . "\n\nAtentamente: " . $nombre ."\n". $email . "\nMi Numero:" . $numero;
    

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo"<script> setTimeout(\"location.href='index.php'\",1000)</script>";



?>