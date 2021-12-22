<?php
session_start();
  //Se declaran las variables que vamos a usar, una para comparar el día guardado con el día actual, y el número.
 $_SESSION['dia'];
 $_SESSION['num_hoy'];
 
 if($_SESSION['dia'] != date("d")){ //Si el día guardado es diferente al día actual realizará el siguiente cambio

   $_SESSION['dia'] = date("d"); //Actualizará el día guardado al de hoy para que así el código no se ejecute más hoy 
   echo "Se actualizo el dia ahora es: ".$_SESSION['dia'];
   
   $_SESSION['num_hoy'] = $_SESSION['num_hoy'] +1; //Y le sumará uno al número para que salga una frase diferente 
   echo "<br/>El numero de hoy es:". $_SESSION['num_hoy'];
   
   if($_SESSION['num_hoy'] == 100){ //Si de casualidad el número llegase a cien le haría un reset para que vuelva a repetir el ciclo hasta el 100 
     $_SESSION['num_hoy'] = 0; 
   }
   
 }else{ //Si no, solamente ejecutará una seguridad de que las funciones valgan lo que deben valer ese día 
   echo $_SESSION['num_hoy'] = $_SESSION['num_hoy'];
   echo "<br/>";
   echo $_SESSION['dia'] = $_SESSION['dia']; 
 }
?>