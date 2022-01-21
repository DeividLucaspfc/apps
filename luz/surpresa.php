
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Luz do Saber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3595C7">
    <meta name="description" content="Deivid Lucas, professor de Matemática.">
    <meta name="keywords" content="desenvolvimento de software, design gráfico, matemática sites">
    <meta name="robots" content= "index, follow">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
    
    $senha = $_POST['senha'];
    
    if($senha == "0605") {
        header('Location: https://forms.gle/GgcHMR7qaKHksWcu5');
    } else {
        echo  "<script>alert('Senha incorreta. Digite novamente.');</script>";
    }
    
?>
<body>
   
   <br><br><h1>JOGO DA MEMÓRIA!!! </h1><br><br>
    <h2>Para ter acesso ao seu bônus, você precisa recordar a senha dada no dia da palestra! </h2><br>
    <h3>Digite-a no campo abaixo e aguarde um instante. </h3><br><br>
    <form action="surpresa.php" method="POST">
        <input type="password" name="senha" placeholder="Digite a senha de acesso" style="width: 300px; height: 50px; position: relative; left: 10%; border-radius: 5px text-align: center;"><br><br>
        <input type="submit" value="Acessar" class="btn-botton" style="width: 150px; height: 50px; border-radius: 5px; background-color: yellow; position: relative; left: 30%;"> 
    </form>   <br><br>
</body>

</html>
