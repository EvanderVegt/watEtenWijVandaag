<?php
$menu = $_GET['weekdag'];
    
    switch($menu){
       case "Maandag":
           echo"erwtensoep";
           
           break;
       case "Dinsdag":
           echo"wraps";
           
           break;
       case "Woensdag":
           echo"gehakt";
           
           break;
       case "Donderdag":
           echo"friet";
           
           break;
       case "Dinsdag":
           echo"wraps";
           
           break;
       case "Vrijdage":
           echo"vis";
           
           break;
       case "Zaterdag":
           echo"Mag Piet kiezen";
           
           break;
       case "Zondag":
           echo"Hosti's";
           
           break;
       default:
           echo"kies een dag van de week";
           
           break;
    }
?>