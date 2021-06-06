<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Solutions Group</title>
    <link rel="stylesheet" href="est-contacto.css">
    <link rel="stylesheet" href="romantic-getaway-styles.css">
    <link rel="stylesheet" href="relaxation-styles.css">
    <link rel="shortcut icon" href="images/favih.ico" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <!--Icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!--Scrolling imagen-->
    <script src="parallax.min.js"></script>
    <script src="main.js"></script>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <!--<div class="logo"><a href="#">Vanessa Moscol<span>.CVE</span></a></div> -->
            <a class="navbar-brand disabled animate__animated animate__slideInDown" href="index.php" id="logo"><img src="images/logo-human4.png" alt="milok.ibx.lat" style="height: 50px; width: 60px;"></a>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Inicio</a></li>
                <li><a href="somos.php" class="menu-btn">Quienes Somos</a></li>
                <li><a href="servicios.php" class="menu-btn">Servicios</a></li>
                <li><a href="servicios.php#talleres" class="menu-btn">Talleres</a></li>
                <li><a href="index.php#socios" class="menu-btn">Socios</a></li>
                <li><a href="contacto.php" class="menu-btn">Contacto</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2">Contáctanos</div>
                <div class="text-1">Consultoría en Talento Humano </div>
                
            </div>
        </div>
    </section>

    <!-- ASESOR -->
    

    <!-- OFRECEMOS-->
    

        <section class="contact" id="contact">
        <div class="max-width">
            <h3 class="cl">¿Necesitas más información o tienes una duda en especifico? <br> Por favor llena el siquiente formulario y nos pondremos en contacto contigo.</h3>
            <div class="contact-content">
                <div class="column left">
                    <img src="images/xd-animate.svg" alt="">
                </div>


                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') { //solo ingreso a este bloque de código si el método con el que solicita la página es POST

                    $tiempoEspera = 4; //tiempo de espera para recargar la página (aplicado en la lógica de refresh)

                    /*if (!isset($_POST['emaildestino'])) { //validación basica del campo email
        echo 'El email del destinatario es requerido, la página será recargada en ' . $tiempoEspera . ' segundos.';
        echo '<meta http-equiv="refresh" content="' . $tiempoEspera . '">';
        exit();
    }*/

                    /*if (!isset($_FILES['archivo']) || !isset($_FILES['archivo']['tmp_name']) || strlen($_FILES['archivo']['tmp_name']) < 3) { //validación básica del campo "archivo adjunto"
                        echo "<script>alert('ERROR: No se envio tu formulario,  Por favor incluye tu CURRICULUM VITAL.')</script>";
                        echo "<script> setTimeout(\"location.href='contacto.php'\",500)</script>";
                        echo '<meta http-equiv="refresh" content="' . $tiempoEspera . '">';
                        exit();
                    }*/

                    //$nombre = $_POST['nombre'];

                    $origenNombre = $_POST['nombre']; //nombre que visualiza el receptor del email como "origen" del email (es quien envía el email)
                    $origenEmail = $_POST['email']; //email que visualiza el receptor del email como "origen" del email (es quien envía el email)
                    $numero = $_POST['numero'];
                    $asunto = $_POST['asunto'];
                    $mensaje = $_POST['mensaje'];

                    $destinatarioEmail = 'humansolutionsgroupec@gmail.com'; //destinatario del email, o sea, a quien le estamos enviando el email
                    $archivoNombre = $_FILES['archivo']['name']; //nombre del archivo a ser enviado (sin la ruta, solo el nombre con la extensión, por ejemplo: imagen.jpg)
                    $archivo = $_FILES['archivo']['tmp_name']; //ruta temporal del archivo a ser adjuntado (ubicación fisica del archivo subido en el servidor)
                    $archivo = file_get_contents($archivo); //leeo del origen temporal el archivo y lo guardo como un string en la misma variable (piso la variable $archivo que antes contenía la ruta con el string del archivo)
                    $archivo = chunk_split(base64_encode($archivo)); //codifico el string leido del archivo en base64 y la fragmento segun RFC 2045
                    $uid = md5(uniqid(time())); //frabrico un ID único que usaré para el "boundary"

                    $asuntoEmail = $asunto; //asunto del email

                    //cuerpo del email:
                    //$cuerpoMensaje = "HA LLEGADO UN NUEVO FORMULARIO DESDE TU PAGINA \n\n";
                    $cuerpoMensaje = "<!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <title>Hola</title>
                        </head>
                        <body>
                                <h2> <b> NUEVO MENSAJE DESDE TU PAGINA </b></h2>
                                <h3><b>Asunto: ".$asunto."</b></h3>
                                <table style='border-collapse:collapse;border-spacing:0' class='tg'>
                                    <thead>
                                        <tr>
                                            <th style='background-color:#000000;border-color:black;border-style:solid;border-width:1px;color:#ffffff;font-family:Arial, sans-serif;font-size:16px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:center;vertical-align:top;word-break:normal'
                                                colspan='2'>FORMULARIO</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                Nombre:</td>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                " . $origenNombre . "</td>
                                        </tr>

                                        <tr>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                Email:</td>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                " . $origenEmail . "</td>
                                        </tr>

                                        <tr>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                Celular:</td>
                                            <td
                                                style='border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:16px;font-weight:bold;overflow:hidden;padding:10px 5px;text-align:left;vertical-align:top;word-break:normal'>
                                                " . $numero . "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </body>
                        </html> \n\n";
                
                    $cuerpoMensaje .= "<h4><b>Mensaje: </b>" . $mensaje . "</h4>\n\n";
                    $cuerpoMensaje .= "<hr><b>Archivo Adjunto:</b> \n";
                    //fin cuerpo del email.

                    //cabecera del email (forma correcta de codificarla)
                    $header = "From: " . $origenNombre . " <" . $origenEmail . ">\r\n";
                    $header .= "Reply-To: " . $origenEmail . "\r\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    //$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                    $header .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";

                    //armado del mensaje y attachment
                    $mensaje = "--" . $uid . "\r\n";
                    $mensaje .= "Content-type:text/html; charset=utf-8\r\n";
                    $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
                    //$mensaje .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                    $mensaje .= $cuerpoMensaje . "\r\n\r\n";
                    $mensaje .= "--" . $uid . "\r\n";
                    $mensaje .= "Content-Type: application/octet-stream; name=\"" . $archivoNombre . "\"\r\n";
                    $mensaje .= "Content-Transfer-Encoding: base64\r\n";
                    $mensaje .= "Content-Disposition: attachment; filename=\"" . $archivoNombre . "\"\r\n\r\n";
                    $mensaje .= $archivo . "\r\n\r\n";
                    $mensaje .= "--" . $uid . "--";

                    //envio el email y verifico la respuesta de la función "email" (true o false)
                    if (mail($destinatarioEmail, $asuntoEmail, $mensaje, $header)) {
                        echo "<script>alert('Formulario Enviado Exitosamente')</script>";
                        echo "<script> setTimeout(\"location.href='contacto.php'\",1000)</script>";
                    } else {
                        echo 'Error, no se pudo enviar el Formulario';
                    }
                    /*echo ', la página será recargada en ' . $tiempoEspera . ' segundos.';
    echo '<meta http-equiv="refresh" content="' . $tiempoEspera . '">';*/
                    exit();
                }
                ?>
                <div class="column right">
                    <div class="text">Contacto</div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="field name">
                            <input type="text" placeholder="Nombre y Apellido" name="nombre" pattern="[A-Za-z ]{5,40}" title="Solo Letras. Tamaño mínimo: 5" minlength="5" required>
                        </div>
                        <div class="field number">
                            <input type="number" placeholder="Celular" name="numero" maxlength="10" minlength="9" pattern="[0-9]" title="Solo Numeros, maximo 10 digitos" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="field">
                            <label for="asunto">Elige un Asunto:</label>
                            <select name="asunto">
                                <option value="Envio de C.V">Enviar C.V.</option>
                                <option value="Información sobre Talleres">Información sobre talleres </option>
                                <option value="Envio Brochure">Envio Brochure</option>
                                <option value="Agendar una reunión">Agendar una reunión</option>
                                <option value="Quiero que alguien me contacte">Quiero que alguien me contacte</option>
                            </select>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Mensaje.." name="mensaje" required></textarea>
                        </div>

                        <h3  style="font-weight: 300;color:white">Seleccione un archivo:</h3>
                        <br>
                        <input type="file" name="archivo" require />
                        <div class="button">
                            <br>
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>  

    <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C144.74,235.36 349.03,-93.25 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #111;"></path>
        </svg></div>

    <!-- footer section start -->

    <div class="footer" id="footer">
        <div class="max-width">
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <div class="text"><b>Nuestras Redes Sociales</b></div>
                        <p>Mantente en contacto en todo lo que hacemos, síguenos en nuestras redes. ;) <br>
                            <a target="_blanck" href="https://www.instagram.com/humansolutionsgroupec/">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                            <a target="_blanck" href="https://ec.linkedin.com/company/human-solutions-group-ec">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                            
                            <a target="_blanck" href="https://api.whatsapp.com/send?phone=593959904420&amp;text=Hola,&nbsp;busco&nbsp;más&nbsp;información&nbsp;de&nbsp;terrenos&nbsp;en&nbsp;Santa&nbsp;Elena.">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text"><b>¿Alguna Duda?</b></div>
                        <p>Estamos comprometidos en brindarte el mejor sevicio posible escribenos a nuestro correo <b>humansolutionsgroupec@gmail.com</b></p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="images/logo-human4.png" alt="" style="width: 180px;height: 150px">
                        <div class="text"><b>Human Solutions Group</b></div>
                        <h6 style="color: 000; padding-bottom: 15px ;">Copyright ©<?php echo date('Y'); ?> todos los derechos reservados.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=593997825551&amp;text=Hola,&nbsp;estoy&nbsp;interesado&nbsp;en&nbsp;sus&nbsp;servicios,&nbsp;quisiera&nbsp;saber&nbsp;más&nbsp;información.">
        <img src="https://img.icons8.com/color/65/000000/whatsapp.png" />
    </a>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>