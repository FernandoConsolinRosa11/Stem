<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stem</title>
    <base href="http://localhost/DevModerna/ProjetoSitePHP/">
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
    <header class="header">
        <a href="home" title="home" class="header-logo" data-aos="fade-right">
            <img src="imagens/logo.png" alt="STEM">
        </a>

        <a href="javascript:showMenu()" title="mostrarmenu" class="header-menu"><img src="imagens/menu.webp"
                alt="menu"></a>

        <nav class="header-nav" data-aos="fade-left">
            <ul>
                <li><a href="home" title="home">Home</a></li>
                <li><a href="sobre" title="sobre">Sobre</a></li>
                <li><a href="lancamentos" title="lancamentos">Lançamentos</a></li>
                <li><a href="contato" title="contato">Contato</a></li>
            </ul>

        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['param'])) {
            $param = $_GET['param'];
            //separar o parametor por /
            $p = explode("/", $param);
            //print_r($_GET);
        }
        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? null;
        if ($page == "jogo") {
            echo $pagina = "jogo/{$jogo}.php";
        } else {
            echo $pagina = "paginas/{$page}.php";
        }
        //verificar se a página existe
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>
    </main>
    <footer class="footer">
        <p>Desenvolvido por Fernando Consolin Rosa&copy;</p>
    </footer>


    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
        function showMenu() {
            let menu = document.querySelector(".header-nav")

            menu.classList.toggle("show");

        }
    </script>
</body>

</html>