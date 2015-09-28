<?php

if(isset($_POST)){
    $name  = $_POST['userName'];
    $email = $_POST['userEmail'];
    $phone = $_POST['userPhone'];
    $msn   = $_POST['userMsg'];

    $body = 'Nombre: '.$name.'<br>
                Email: '.$email.'<br>
                Telefono: '.$phone.'<br>
                Mensaje: '.$msn.'<br>';

    require_once "Mail-1.2.0/Mail.php";

    $recipients = "info@aquapro-services.com";
    $headers["From"] = "info@aquapro-services.com";
    $headers["To"] = $recipients;
    $headers["Subject"] = "Contacto desde la pagina web aquapro";
    // host
    $params["host"] = "mail.aquapro-services.com";

    // puerto smtp
    $params["port"] = "25";

    // activamos la autenticacion, siempre a true
    $params["auth"] = true;

    // usuario del correo desde el que enviamos, la que se creo o utiliza en la parte numero 1.
    $params["username"] = "info@aquapro-services.com";

    // clave de la cuenta de correo anterior
    $params["password"] = "aqua12345";

    // Creamos el objeto mail usando el metodo Mail::factory
    $mail_object =& Mail::factory("smtp", $params);

    try{
        echo '<div id="content">';
        // Enviamos el correo con los datos anteriores
        if($mail_object->send($recipients, $headers, $body)){
            header('location: contact.html?msn=Se envío correctamente.');
        }else{
            echo 'No se enviar correctamente su mensaje.';
        }
        echo '</div>';
    }catch(Exception $e){
        //print_r($e);

    }
}
?>