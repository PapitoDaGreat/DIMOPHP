<?php

   $_POST;
   $_GET;
   $_SERVER;

   if($_SERVER["REQUEST_METHOD"] == "POST"){

   $Username     = $_POST["Username"];
   $Email        = $_POST["Email"];
   $Password     = $_POST["Password"];
   $ConfirmPass  = $_POST["ConfirmPass"];
   }
   
   if(trim($Username)){
   echo  "Username is " . $Username. "<br>";
   }else{
      echo "Username is empty <br>";
   }

   if(trim($Email)){
   echo  "Email is " . $Email. "<br>";
    }else{
   echo "Email is empty <br>";
   }


   if(trim($Password)){
   echo "Password is" .$Password. "<br>";
   }else{
   echo "Password is empty <br>";
   }


   if(trim($ComfirmPass)){
   echo   "ComfirmPass is" .$ConfirmPass. "<br>"
    }else{
      echo "ComfirmPass is empty <br>";
   }


?>