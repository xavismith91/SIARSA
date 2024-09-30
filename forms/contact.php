<?php
    $nombre =$_POST["nombre"];
    $mensaje=$_POST["message"];
    $correo = $_POST["correo"]; // correo que ingresan en el formulario
    $correo2 = 'sistemas@ce2000.mx';'xaviersolano91@gmail.com';// correo en donde van a llegar los datos del formulario 
    $telefono = $_POST['telefono'];
    $tiposervicio = $_POST['servicio'];
    $equipo = $_POST['equipo'];
    $marca = $_POST['marca'];
    $remitente= "SIARSA";
    $asunto= 'Cotización Cliente';
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>
      <h3> Cliente: $nombre</h3>
      <h3> Correo: $correo </h3> 
      <h3> Tipo de Servicio: $tiposervicio </h3>
      <h3> Marca: $marca </h3>
      <h3> Equipo: $equipo </h3>
      <h3> Teléfono de Contacto: $telefono</h3
      <h3> $mensaje </h5>
      <h3> SIARSA 2024 </h3>
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
    $sheader .= 'Cc: xaviersolano91@gmail.com' . "\r\n";
    if (mail($correo2,$asunto,$cuerpo,$sheader,$mensaje)) {
      echo '<script>alert("Su Mensjae ha sido enviado correctamente, espere su confirmación");</script>';
    }else {
      echo '<script>alert("Verifique su información e intente de nuevo");</script>';
    }

    echo '<script>window.location.href = "../index.html";</script>';


?>
 