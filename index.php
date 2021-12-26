<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo 5 TDD Validar Contraseña</title>
    
</head>

<body>
      <center><h1>VALIDAR CONTRASEÑA-TECNICA TDD</h1></center>
      <div class="form">
         <form action="./src/validacion Test.php" method="post">
            <input type=password name="clave"><br><br>
            <input type="submit" value="VALIDAR" class="enviar">
         </form>
   </div>
      <div style="color: aliceblue;background-color: black;width: 200px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 0 18px rgb(39, 38, 20);" class="Grupo5"> 
         <center><h3>(Grupo5)</h3></center>
               <ol>
                  <li>Alberto Sanchez 
                  <li>Leonel Lupaca 
                  <li>Karla M.   
               </ol>
      </div>
      <div style="" class="indicaciones"> 
         <center><h3>La clave debe cumplir</h3></center>
               <ol>
                  <li>Más de 10 carácteres (Nivel +1)
                  <li>Más de 20 carácteres (Nivel +2)
                  <li>Alfanumérico (Nivel +3).
                  <li>Alfanumérico (Nivel +3).
                  <li>Contiene carácteres especiales como /, _, $… (Nivel +4).
                  <li>Alfanumérico (Nivel +5).
               </ol>
      </div>
  
    <style>
        body{
            background:#918989;
        }
       div.form{
         padding-top: 2%;
           padding-left: 38%;
           align-content: center;

       }
       div.indicaciones{
         color: aliceblue;
         background-color: black;
         width: 450px;
         margin-bottom: 20px;
         border-radius: 10px;
         box-shadow: 0 0 18px rgb(39, 38, 20);
       }
       h1{
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       input{
         height: 40px;
         width: 290px;
         color: blue;
         border-radius: 10px;
       }
       input.enviar{
         height: 40px;
         width: 300px;
         background-color: blue;
         border-radius: 10px;
         color: antiquewhite;
         font-size: 20px;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       input.enviar:hover {   
         background-color: rgb(85, 85, 143);
         color: rgb(245, 221, 6);
         font-size: 21px;
         box-shadow: 0 0 8px rgb(240, 212, 52);
       }

    </style>
</body>
</html>