<header class="cabecalho">
    <a href="index.php"><h1 class="logo"></h1></a>
    <button class="btn-menu">&#10868;</button>
    <nav class="menu">
      <a class="btn-close">&#10799;</a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://www.instagram.com/deivid.lucaspfc/">Artes gráficas</a></li>
        <li><a href="http://sccartola.com/">Desenvolvimento de Campeonatos</a></li>
        <li><a href="canguru.php">Canguru ELS</a></li>
        <li><a href="https://www.facebook.com/deivid.lucas.129">Quem sou</a></li>
      </ul>
    </nav>
  </header>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script>
    $(".btn-menu").click(function(){
      $(".menu").show();
    });
    $(".btn-close").click(function(){
      $(".menu").hide();
    });
  </script>
    
    