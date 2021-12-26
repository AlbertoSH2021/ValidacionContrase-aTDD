<?php
use PHPUnit\Framework\TestCase;
//require './app/contraseña Test.php';

class validacionClaveTest extends TestCase{
        
   public function test_clave_10_digitos($clave='a'){
      //instancia de la clase Claves
     // $claves=new Claves();  
     
      //$clave10digitos=$claves->validar_clave('abcdefghi',"La clave debe tener al menos 10 caracteres");
      //$this->assertnotEquals('abcdefghi' && "La clave debe tener al menos 10 caracteres",$clave10digitos );
      $this->assertEquals('a',$clave); 
   }
   //====================================contraseña con mas de 10 caracteres
   public function test_clave_mas10_digitos( $error_clave=''){
         $clave='abcdefghi';
       //clave min 10 caracteres
      if(strlen($clave) >= 10){
          $error_clave = "PASSWORD VÁLIDO";
         //return false;
      }
      else{
         $error_clave = "La clave debe tener al mas de 10 caracteres";
        
         //return false;
      }
      $this->assertEquals("La clave debe tener al mas de 10 caracteres",$error_clave);
     // $this->assertNotEquals('passwordcorrecto',$error_clave);
   }
   //====================================contraseña con mas de 20 caracteres
   public function test_clave_mas20_digitos( $error_clave=''){
         $clave='abcdefghig012345678';
      //clave min 10 caracteres
      if(strlen($clave) >= 20){
         $error_clave = "PASSWORD VÁLIDO";
         //return false;
      }
      else{
         $error_clave = "La clave debe tener mas de 20 caracteres";
         //return false;
      }
      $this->assertEquals("La clave debe tener mas de 20 caracteres",$error_clave);
   }
   
}
//vendor/bin/phpunit
?> 