<?php
session_start();
 //Blickrichtung ändern
    if($_POST['rechts'] == "Rechts" && $_POST['blickrichtung'] == "Norden")
    {
        $_SESSION['blickrichtung'] = "Osten";
    }
    else if($_POST['links'] == "Links" && $_POST['blickrichtung'] == "Norden")
    {
        $_SESSION['blickrichtung'] = "Westen";
    }
    else if($_POST['rechts'] == "Rechts" && $_POST['blickrichtung'] == "Osten")
    {
        $_SESSION['blickrichtung'] = "Sueden";
    }
    else if($_POST['links'] == "Links" && $_POST['blickrichtung'] == "Osten")
    {
        $_SESSION['blickrichtung'] = "Norden";
    }
    else if($_POST['rechts'] == "Rechts" && $_POST['blickrichtung'] == "Sueden")
    {
        $_SESSION['blickrichtung'] = "Westen";             
    }
    else if($_POST['links'] == "Links" && $_POST['blickrichtung'] == "Sueden")
    {
        $_SESSION['blickrichtung'] = "Osten"; 
    }
    else if($_POST['rechts'] == "Rechts" && $_POST['blickrichtung'] == "Westen")
    {
        $_SESSION['blickrichtung'] = "Norden";
    }
    else if($_POST['links'] == "Links" && $_POST['blickrichtung'] == "Westen")
    {
        $_SESSION['blickrichtung'] = "Sueden";
    }
    //x und y Position ändern, je nach Blickrichtung
    if($_POST['gehen'] == "Gehen" && $_POST['blickrichtung'] == "Norden")
    {
        $_SESSION['y_position'] = $_SESSION['y_position'] + 1;
    }
    else if($_POST['gehen'] == "Gehen" && $_POST['blickrichtung'] == "Osten")
    {
        $_SESSION['x_position'] = $_SESSION['x_position'] + 1;
    }
    else if($_POST['gehen'] == "Gehen" && $_POST['blickrichtung'] == "Sueden")
    {
        $_SESSION['y_position'] = $_SESSION['y_position'] - 1;
    }
    else if($_POST['gehen'] == "Gehen" && $_POST['blickrichtung'] == "Westen")
    {
        $_SESSION['x_position'] = $_SESSION['x_position'] - 1;
    } 

  header ("Location: index.php");
?>
