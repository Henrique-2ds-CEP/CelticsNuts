<?php
function template_header($title){
echo <<<HTML
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link rel="shortcut icon" href="../imagens/celticsNuts_Cia.ico" type="image/x-icon">
    	<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>
    <header>
        <div class="container">
            <a href="https://www.nba.com/celtics/"><img src="../imagens/celticsNuts_Cia.-removebg-preview.png" alt="LogoNuts" title="Celtics Nuts & Cia." height="120px"></a>
            <nav class="menu">
                <ul>
                    <li><h1 class="BemVindo">Celtics Nuts & Cia.</h1></li>
                    <li class="liOrnament"><a class="menuLink" href="../Celtics Nuts & Cia/index.html">Home</a></li>
                    <li class="liOrnament"><a class="menuLink" href="../Celtics Nuts & Cia/produtos.php">Produtos</a></li>
                </ul>
            </nav>
        </div>
    </header>
HTML;
}
function template_footer() {
echo <<<HTML
    <footer>
        <p class="registrado">© 2023 Celtics Nuts & Cia.</p>
    </footer>
</body>
</html>
HTML;
}
?>
