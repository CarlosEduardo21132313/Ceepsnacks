<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="css/estilo.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3478cf0681.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.ico">
</head>
<body>
    <header class="header1">
        <a href="index.html"><img src="img/3.png"></a>
        <nav id="myTopnav" class="topnav">
          <a href="sobre.html">Sobre</a>
          <a href="produtos.php">Produtos</a>
          <a href="produtos_lite.php">Produtos lite</a>
          <a href="/registros/logi/login.php">Encerrar Sessão</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i> </a>
      </nav>
    </header>
<section class="cadastro">
    <div class="cadastro1">
    <h1>Cadastre aqui:</h1>
    <form method="post" action="processar_cadastro.php">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" name="nome" id="nome" required><br>

        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao" rows="4" cols="50"></textarea><br>

        <label for="preco">Preço:</label><br>
        <input type="number" name="preco" id="preco" step="0.01" required><br>

        <input class="botao" type="submit" name="submit" value="Cadastrar Produto">

    </form></div>
    <br class=arrombado>
    <div class="cadastrodesc">
        <h1>Cadastre já o seu produto!</h1>
        <h2>Não leva nem um minuto...</h2>
    <div>
</section>
    <footer class="footer1">
        <p>CeepLanches 2023©</p>
    </footer>
        <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += "responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script><!--menu hamburguer-->
</body>
</html>