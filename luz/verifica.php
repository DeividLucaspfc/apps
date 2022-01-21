<?php

require_once ('conexao.php');

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']); //addslashes evita hackers

   
   
$consulta = "SELECT * FROM loginsluz WHERE email='{$email}'";
$resultado = mysqli_query($conn, $consulta);


if (mysqli_num_rows($resultado) > 0) {
    $dado = $resultado->fetch_array();
    
    ?>
    <h1 style="font-size: 12pt"><?php echo "Olá ".$dado['nome']."!"; ?> </h1>
    <h2 style="font-size: 10pt"><?php echo "Bem vindo ao Conexia Luz do Saber"; ?> </h2>
    <p style="font-size: 10pt"><?php echo "Seu Login de acesso é ".$dado['login']; ?> </p>
    <p style="font-size: 10pt"><?php echo "E sua senha é ".$dado['senha']; ?> </p>
    <p style="font-size: 8pt"><?php echo "Aproveite bastante este período de degustação." ?> </p>
    <p style="font-size: 8pt"><?php echo "Qualquer dúvida entre em contato!" ?> </p>
    
    
    
  <?php 

} else {
    ?> <div class= "text"> <?php
    echo "EMAIL E SENHA NÃO CORRESPONDEM!";?>
    <a href="index.php">Voltar</a>
    </div><?php
    }   
?>