<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Felipe Arquitetura</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contato.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
    </script>
</head>
<body>
    <header class='header'>
        <div class='logo-img'>
            <a href="index.html" style="text-decoration: none; color: white;"><h1>Logo</h1></a>
        </div>
        <div class='hamburguer active'>
            <p>&#9776;</p>
        </div>
        <nav class="nav active">
            <a href="index.html">Início</a>
            <a href="#">Portifólio</a>
            <a href="sobre.html">Sobre mim</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>
       
        <div class="title">
            <h1 style="text-align: center; text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.726);">FALE CONOSCO</h1>
        </div>
        <div class="counteiner-info">
                <div class="img-exhibition">
                        <img src="img/foto-sobre.jpg" alt="Felipe Ferreira Palha">
                </div>
                <div class="infos">
                    <form action="e-validation.php" method="POST">
                        <div class="back-end-infos">
                            <label for="nome">Nome</label> </br>
                            <input type="text" name="nome" id="nome">
                        </div>
                        <div class="back-end-infos">
                            <label for="nome">E-mail *</label> </br>
                            <input type="email" name="email" id="email"> <br>
                        </div>
                        <div class="back-end-infos">
                            <label for="nome">Assunto</label> </br>
                            <input type="text" name="assunto" id="assunto"> <br>
                        </div>
                        <div class="back-end-infos">
                            <label for="nome">Escreva sua mensagem *</label> </br>
                            <textarea name="conteudo"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Enviar!">
                        </div>
                    </form>
                </div>
       </div>
        
    </main>
    <footer>
        <img src="img/icone-facebook.png" alt="">
        <img src="img/icone-insta.png" alt="">
        <img src="img/icone-zap.png" alt="">
    </footer>
    <script src="header.js"></script>
    <script src="slides.js"></script>
</body>
</html>