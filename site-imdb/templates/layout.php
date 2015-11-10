<!DOCTYOE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="/css/normalize.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div class="centralizar">
            <header id="cabecalho">
                <a href="/">
                    <img src="/img/logo.png" class="logo" alt="Logo IMDB" title="IMDB">
                </a>

                <nav class="menu">
                    <a class="menu-link" href="/">Home</a>
                    <a class="menu-link" href="/lista">Lista de Filmes</a>
                    <a class="menu-link" href="/sobre">Sobre</a>
                </nav>

                <form class="form-pesquisa">
                    <input type="text" id="pesquisa">
                    <button>Pesquisar</button>
                </form>
            </header>
            <?php include_once $page . '.php'; ?>
            <footer id="rodape">
                <p>&copy; CopyRight - Site - Todos os direitos reservados.</p>
            </footer>
        </div>
    </body>
</html>