<?php
// pegar os dados da tela

$email = $_POST["email"];
$senha = $_POST["senha"];




/*
echo " E-mail : ".$email;
*/

// abrir a conexao com  o banco de dados

     // mysqli_connect(SERVIDOR,USUARIO, SENHA , BANCO)
     $con = mysqli_connect("localhost","root","","aulaprojeto01");

     // montar a instruçao de seleçao para ir ao banco
     $sql = "select * from usuario where email='".$email."' and senha ='".$senha."'";

     //executar instrução
     $rs = mysqli_query($con,$sql);
     if(mysqli_num_rows($rs)==1){
        // echo "Encontrei";
        //redirecionar para a página painel, que está dentro da pasta ADM
        echo "<script>";
        echo "location.href='ADM/painel.php'";
        echo "</script>";
     }else{
         //echo "não encontrei";
         echo "<script>";
         $msg= base64_encode("usuario e senha invalido");
         echo"location.href ='logar.php?m=".$msg."'";        
          echo "</script>";
     }
     

?>