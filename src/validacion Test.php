<?php
require_once('contraseñas Test.php') ;
if ($_POST){
    $error_encontrado="";
    if (validar_clave($_POST["clave"], $error_encontrado)){
       echo "PASSWORD VÁLIDO";
    }else{
       echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
    }
 }
?> 