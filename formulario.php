<!-- DOCTYPE -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Formulario - Prefila
    </title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--Fonts-->
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="assets/fonts/simple-line-icons.css">    
     
    <!-- Extras -->
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/owl/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/extras/settings.css">

    <!-- Color CSS Styles  -->  
    <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css" media="screen" />


    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
    </script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
    </script>
    <![endif]-->
    <link rel="icon" href="assets/img/logo.JPG">
  </head>
  <body>

  <!-- Header area wrapper starts -->
  <?php
    include ('header.php');
  ?>
    <!-- Header-wrap Section End -->
    
    <!-- Page Header -->
    <div class="page-header-section">
      <div class="container">
        <div class="row">
          <div class="page-header-area">
            <div class="page-header-content">
              <h2>Formulario</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->
    <div class="container">
      <div class="row">
          <h3>Gracias por rellenar el formulario</h3>
          <p>Otras preguntas realizadas por otros usuarios son:</p>
            <br>
            <?php
            define("RECIPIENT_NAME", "TEWC");
            define("RECIPIENT_ADDRESS", "aesco96@gmail.com");
            define("EMAIL_SUBJECT", "Consulta");


            $senderEmail = $_POST['mail'];
            $senderName = $_POST['name'];
            $message = $_POST['Pregunta'];


            $Success = false;
            if(!empty($senderEmail) && !empty($senderName) && !empty($message)){
                $recipient = RECIPIENT_NAME . " <" . RECIPIENT_ADDRESS . ">";
                $headers = "From: " . $senderName . " <" . $senderEmail .">";
                $success = mail($recipient,EMAIL_SUBJECT , $message, $headers);
            }
            ?>
            <?php
            $nombre = $_REQUEST['name'];
            $pregunta = $_REQUEST['Pregunta'];
            $ciudad = $_REQUEST['province'];
            require_once 'conectar.php';
            $sql_insert = "INSERT INTO `consultas` (Nombre, Pregunta, Ciudad)
                VALUES ('$nombre', '$pregunta', '$ciudad')";
            try{
                $db->query($sql_insert);
            }catch(Exception $error){
                die("Error al insertar" . $error->getMessage());
            }
            ?>
            <?php
            $nombre = $_REQUEST['name'];
            $pregunta = $_REQUEST['Pregunta'];
            $ciudad = $_REQUEST['province'];
            require_once 'conectar.php';
            $sql = "SELECT Nombre, Pregunta, Ciudad FROM consultas";
            ?>
            <table class="table-striped" width="100%">
                <tr bgcolor="blue">
                    <th>Nombre</th>
                    <th>Pregunta</th>
                    <th>Ciudad</th>
                </tr>

            <?php foreach ($db->query($sql) as $fila){ ?>
                <tr>
                    <td><?php echo $fila['Nombre'] ?></td>
                    <td><?php echo $fila['Pregunta'] ?></td>
                    <td><?php echo $fila['Ciudad'] ?></td>
                </tr>
            <?php } ?>
            </table>
            <br>
        </div>
    </div>

  <!-- Footer Section -->
  <?php
    include ('footer.php');
  ?>
  <!-- Footer Section End-->
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up">
      </i>
    </a>

    <div class="bottom"> <a href="#" class="settings"></a> </div>
    
    <!-- JavaScript & jQuery Plugins -->
    <!-- jQuery Load -->
    <script src="assets/js/jquery-min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Text Rotator-->
    <script src="assets/js/jquery.mixitup.js"></script>
    <!--WOW Scroll Spy-->
    <script src="assets/js/wow.js"></script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.js"></script>
 
    <!-- WayPoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- CounterUp -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- ScrollTop -->
    <script src="assets/js/scroll-top.js"></script>
    <!-- Appear -->
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.vide.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>