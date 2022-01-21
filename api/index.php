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
  <div id="cotacoes" style="position: relative; align-content: center; left: 10%; }">
  <a href="https://mercadocotacao.com/dolar-hoje/" id="USD" title="Cotação do Dólar Americano Hoje" name="mercado_cotacao">Dólar Hoje</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>

  <a href="https://mercadocotacao.com/bitcoin-hoje/" id="BTC" title="Cotação do Bitcoin Hoje" name="mercado_cotacao">Bitcoin</a><script async src="https://mercadocotacao.com/money/mercadocotacao.js"></script>
  </div>
  <h1>SEJA BEM VINDO AO MEU SITE!</h1><br>
  <h1>Tem vídeo novo no canal! </h1>
  <a href="https://www.youtube.com/channel/UC8eISGz8qhb9zTE1sw2UHQg">
        <img src="https://igrejanh.org/wp-content/uploads/2016/08/logo_youtube_transparente_retina_brnaco.png" style="width: 80px; height: 50px; position: relative;
    left: 50%;">
    </a>
    <iframe width="95%" height="250px" src="https://www.youtube.com/embed/kXLa9H3IQwQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <h2>Cotações para Investimentos</h2><br>
  
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "Real State",
      "proName": "BMFBOVESPA:TRXF11"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->
 

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "Kinea",
      "proName": "BMFBOVESPA:KNRI11"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "Shoppings",
      "proName": "BMFBOVESPA:XPML11"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->

 <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "Ambev",
      "proName": "BMFBOVESPA:ABEV3"
    }
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Cotações</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "description": "Magalu",
      "proName": "BMFBOVESPA:MGLU3"
    }
    
  ],
  "colorTheme": "dark",
  "isTransparent": false,
  "showSymbolLogo": true,
  "locale": "br"
}
  </script>
</div>
<!-- TradingView Widget END -->



 </body> 
<footer>
   <?php
   require_once 'footer.php';
   ?> 
</footer>
</html>