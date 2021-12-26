<?php
//require 'validacion Test.php';
//class clave{
   function validar_clave($clave,&$error_clave){
    //clave min 10 caracteres
   if(strlen($clave) < 10){
      $error_clave = "La clave debe tener al menos 10 caracteres";
      return false;
   }
   //clave min 20 caracteres 
   if(strlen($clave) >= 20){
      $error_clave = "La clave no puede tener más de 20 caracteres";
      return false;
   }
   //alfanumerico
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   //caracteres especiales
   /**===================================================================== */
   if (!preg_match('`[ñÑ/_-áéíóú&\+]`',$clave)){
    $error_clave = "La clave nesecita caracteres especiales";
    return false;
    }
    //espacio vacio
    /**===================================================================== */
    if (!preg_match('`[ ]`',$clave)){
        $error_clave = "La clave nesecita al menos un espacio vacio";
        return false;
     }
    /**===================================================================== */
   $error_clave = "";
   return true;
 
}
  

?>