<?php
function template_header($title){
echo <<<HTML
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celtics Nuts & cia.</title>
    <!--bootstap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">  
</head>
    <body>
    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <a href="https://www.nba.com/celtics/"><img src="../imagens/celticsNuts_Cia.-removebg-preview.png" alt="LogoNuts" title="Celtics Nuts & Cia." height="120px"></a>
            <nav class="menu">
                <ul>
                    <li><h1 class="BemVindo">Celtics Nuts & Cia.</h1></li>
                    <li class="liOrnament"><a class="menuLink" href="../Celtics Nuts & Cia/index.html">Home</a></li>
                    <li class="liOrnament"><a class="menuLink" href="../Celtics Nuts & Cia/index.php">Produtos</a></li>
                </ul>
            </nav>
        </div>
    </header>
HTML;
}
function template_footer() {
echo <<<HTML
      <!-- Rodapé -->
    <footer>
        <p class="registrado"><a href="../Celtics Nuts & Cia/contato.php">© 2023 Celtics Nuts & Cia.</a></p>
    </footer>
</body>
</html>
HTML;
}
?>
