<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
</head>

<body>
<div class="container">
      <h3> Login </h3>
      <fieldset>
      <legend>:::Sistema::::</legend>
      <form action="verificarlogin.php" method = "post  ">
      e-mail.: <input type="text" name="email"
      placeholder= "digite o e-mail" class="form-control"/>
      <br><br>

      senha.: <input type="password" name="senha"
      placeholder="digite a senha"class="form-control"/>
      <br><br>
      <input type="submit" value="entrar no sistema"/>
      
     
      </form>
      <?php
     
     
     if(isset($_GET["m"])){
           echo base64_decode($_GET["m"]);
       }
 
       ?>

</fieldset>
    </div>
    
 
</body>
</html>