<?php
 $destinatario = 'alanrodriguezagostini71@gmail.com';

 $nombreyapellido = $_POST['nombre y apellido'];
 $empresa = $_POST['empresa'];
 $telefono = $_POST['telefono'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];

 $header = 'From: Enviado desde la pagina prueba Alan';
 $mensajeCompleto = $mensaje . "\n Nombre y Apellido: " . $nombreyapellido . "\n Telefono: " . $telefono . "\n E-mail: " . $email;

 mail($destinatario, $empresa, $mensajeCompleto, $header);

 echo "<script>alert('correo enviado exitosamente')</script>";
 echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>