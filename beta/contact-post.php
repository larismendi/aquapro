<?php

if(isset($_POST) && $_POST['userName'] && $_POST['userEmail']){
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
        // Enviamos el correo con los datos anteriores
        if($mail_object->send($recipients, $headers, $body)){
            $msn = 'Se env&iacute;o correctamente.';
        }else{
            $msn = 'No se enviar correctamente su mensaje.';
        }
    }catch(Exception $e){
        //print_r($e);
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>AQUAPRO POOL SERVICES.LLC | Residential pool service | Comunitys | Aparmentcomplex</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="" content="Residential, Commercial, Screen repair, Pressure wash, Paversealing">
    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--slider-->
    <link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='js/camera.min.js'></script>
</head>

<!-- NAV, LOGO, BUTTONS -->

<body>
<div class="h_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="slider_bg">
    <div class="wrap">
        <div class="slider">
            <ul class="nav">
                <li class="active"><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="gallery.html">WORK</a></li>
                <li><a href="service.html">SERVICES</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
</div>
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="contact">
                <div class="section group">
                    <div class="col span_1_of_3">
                        <div class="contact_info">
                            <h3>Map</h3>
                            <div class="map">
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.9562541815286!2d-81.37827027080667!3d28.327514938869953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd8666d4fb28bb%3A0x410bb2f7144a2a2b!2s2667+Oak+Run+Blvd%2C+Kissimmee%2C+FL+34744%2C+EE.+UU.!5e1!3m2!1ses-419!2sve!4v1440108242642"></iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.9562541815286!2d-81.37827027080667!3d28.327514938869953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd8666d4fb28bb%3A0x410bb2f7144a2a2b!2s2667+Oak+Run+Blvd%2C+Kissimmee%2C+FL+34744%2C+EE.+UU.!5e1!3m2!1ses-419!2sve!4v1440108242642" style="color: rgba(180, 192, 21, 0.71);;text-align:left;font-size:12px">View Larger Map</a></small>
                            </div>
                        </div>
                        <div class="company_address">
                            <h3>Company Aquapro</h3>
                            <p>2667, Oak Run Blvd Kissimmee,<br></p>
                            <p>FL 34744-EE.UU.</p>
                            <p>USA</p>
                            <p>Phone:754-244.67.26  /  407-749.49.35</p>
                            <p>Email: <span>info@aquapro-services.com/</span></p>
                            <p>Follow on: <span>Facebook</span>, <span>Instagram</span></p>
                        </div>
                    </div>
                    <div class="col span_2_of_3">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            <!-- the result of the search will be rendered inside this div -->
                            <?=isset($msn)?'<div id="result">'.$msn.'</div>':''?>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ftr-bg">
    <div class="wrap">
        <div class="footer1">
            <div class="logo">
                <h1><a href="index.html"><img src="images/logo1.png" alt=""></a></h1>
            </div>
            <div class="copy">
                <p class="w3-link">© All Rights Reserved | Design by<a href="http://accioncreativa.com.ve/"> ACCIONCREATIVA.com.ve</a></p>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
