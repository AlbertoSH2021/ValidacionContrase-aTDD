<?php
require './src/contraseña Test.php';
class claves{
   public function validar_clave($clave,&$error_clave){
      $error_clave = "";
      return true;
   if ($_POST){
      $error_encontrado="";
      if (validar_clave($_POST["clave"], $error_encontrado)){
         echo "PASSWORD VÁLIDO";
      }else{
         echo "PASSWORD NO VÁLIDO: " . $error_encontrado;
      }
   }
   
  }
 
}
/*<div style="color: aliceblue;background-color: black;width: 200px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 0 18px rgb(39, 38, 20);" class="Grupo5"> 
         <center><h3>(Grupo5)</h3></center>
               <ol>
                  <li>Alberto Sanchez 
                  <li>Leonel Lupaca 
                  <li>Karla M.   
               </ol>
      </div>*/
  

?>
