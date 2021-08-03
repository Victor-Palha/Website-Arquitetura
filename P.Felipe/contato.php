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
        <!--Imagem De Contato-->
        <div class="counteiner-info">
                <div class="img-exhibition">
                        <img src="img/foto-sobre.jpg" alt="Felipe Ferreira Palha">
                </div>
                <div class="infos">
                    <!--Formulario para validação-->
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
                            <select name="assunto" id="assunto" style='width: 100%;
                                height: 50px;
                                padding: 10px;
                                opacity: 1;
                                transition: 0.5s;
                                border: none;
                                border-bottom: 2px solid black;
                                box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.603);
                                text-align: center;'>
                                <option value="Orçamento">Orçamento</option>                               
                                <option value="Novo projeto">Novo Projeto</option>
                                <option value="Reportar erro">Reportar Erro</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="back-end-infos">
                            <label for="nome">Escreva sua mensagem *</label> </br>
                            <textarea name="conteudo"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Enviar!" onclick="validacao()">
                        </div>
                    </form>
                </div>

       </div>
       <!--JS res-->
       <div id="verifica">

       </div>
    </main>
    <footer>
        <a href="https://www.facebook.com/felipe.ferreira.palha" target="_blank" rel="external"><abbr title="Facebook"><img src="img/icone-facebook.png" alt=""></abbr></a>
        <a href="https://www.instagram.com/arq.felipepalha/" target="_blank" rel="external"><abbr title="Instagram"><img src="img/icone-insta.png" alt=""></abbr></a>
        <abbr title="+55 91 8106-8185"><img src="img/icone-zap.png" alt=""></abbr>
    </footer>
    <script>
        alert("Os campos com * são obrigatórios para o envio de sua mensagem!");
    </script>
    <script src="valida.js"></script>
    <script src="header.js"></script>
    <script src="slides.js"></script>
</body>
</html>