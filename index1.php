<?php
include "bewegen.php";;
session_start();
//Startwerte festlegen
if($_SESSION['x_position'] == "")
{
  $_SESSION['x_position'] = 0;
}
if($_SESSION['y_position'] == "")
{
  $_SESSION['y_position'] = 0;
}
if($_SESSION['blickrichtung'] == "")
{
  $_SESSION['blickrichtung'] = "Norden";
}
$_SESSION['name'] = $_GET['name'];
?>

<html>
  <head>
    <title>
      Virtuelle Welt
    </title>
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <!-- Einbinden der Loginbox -->
    <link href="js/facebox.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/facebox.js" type="text/javascript"></script>
    <!-- Scriptfunktion zum Zeichnen der Box -->
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
    loadingImage : 'js/src/loading.gif',
    closeImage   : 'js/src/closelabel.png'
    })
    })
    </script>
  </head>
  <body>
<!-- <a href="#info" rel="facebox">Login</a> -->
    <iframe src="wand.php" width="100%" height="80%" border="0" frameborder="1" name="Weltframe">
<?php
      ?>
    </iframe>
    <div id="navdiv">
      <center>
        <?php echo "<p>Hallo " .$_SESSION['name']. ", du befindest dich derzeit auf der Position " .$_SESSION['x_position']. "|" .$_SESSION['y_position']. " in Blickrichtung " .$_SESSION['blickrichtung'];  ?>
        <form action = "bewegen.php" method = "post" name = "Form1">
          <p>            Wohin willst du als nächstes gehen?
            <p>
              <input type = "submit" value = "Links" name = "links">
              <input type = "submit" value = "Gehen" name = "gehen">
              <input type = "submit" value = "Rechts" name = "rechts">
              <input type = "hidden" value = "<?php echo $_SESSION['blickrichtung'] ?>" name = "blickrichtung"/>
              <input type = "hidden" value = "<?php echo $_SESSION['x_position'] ?>" name = "x_position"/>
              <input type = "hidden" value = "<?php echo $_SESSION['y_position'] ?>" name = "y_position"/>
        </form>
      </center>
    </div>
   <div id="info" style="display:none;">
      <center>
        <?php

        ?>
      </center>
    </div>
  </body>
</html>
