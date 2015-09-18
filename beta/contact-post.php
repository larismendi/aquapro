<?php

if(isset($_POST)){
    $name  = $_POST['userName'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhone'];
    $msn   = $_POST['userMsg'];

    $mensaje = 'Nombre: '.$name.'<br>
                Email: '.$email.'<br>
                Telefono: '.$phone.'<br>
                Mensaje: '.$msn.'<br>';

    mail('luisfelipe.arismendi@gmail.com', 'Contacto desde la pagina web aquapro', $mensaje);
}

?>