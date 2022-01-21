<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3595C7">
    <meta name="description" content="Deivid Lucas, professor de Matemática.">
    <meta name="keywords" content="desenvolvimento de software, design gráfico, matemática sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  <?php require_once 'header.php';?>
  <h1>SEJA BEM VINDO(A)!</h1><br><br>
  <form method="POST" action="*">
        <h2>Escreva seu nome</h2><br>
        <input type="text" name="nome" placeholder="Escreva seu nome" 
        style = "position: relative;
        text-align: center;
        left: 20%;
        height: 40px;
        width: 60%;"  
        required><br><br>
        <h2>Sua série</h2><br>
        <input type="number" id="serie" name="serie" placeholder="Insira sua serie" max="9" min="6" 
        style = "position: relative;
        text-align: center;
        left: 40%;
        height: 40px;
        width: 60px;" 
        required>
        <span class="lnr lnr-eye" style="color: orange;"></span><br><br>
        <input type="submit" value="Acessar" class="btn-botton" 
        style = "position: relative;
        text-align: center;
        left: 5%;
        height: 40px;
        width: 60px;
        color: white;
        background: blue">
        <br><br>
    </form>
    
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>