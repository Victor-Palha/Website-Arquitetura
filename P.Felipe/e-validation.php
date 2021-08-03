<?php

date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




if($_POST){
    $nome = !empty($_POST['nome']) ?  $_POST['nome'] : 'Não informado';
    $email = !empty($_POST['email']) ?  trim($_POST['email']) : 'Não informado';
    $assunto = !empty($_POST['assunto']) ?  utf8_decode($_POST['assunto']) : 'Não informado';
    $conteudo = !empty($_POST['conteudo']) ?  trim($_POST['conteudo']) : 'Não informado';
    $data = date('d/m/Y H:i:s');
    if($_POST['email'] && $_POST['conteudo']){
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lipepalha@gmail.com';
        $mail->Password = 'fe141295';
        $mail->Port = 587;

        $mail->setFrom('lipepalha@gmail.com');
        $mail->addAddress('lipepalha@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body = "Nome: {$nome} <br>
                        E-mail: {$email} <br>
                        Mensagem: {$conteudo} <br>
                        Data/Hora: {$data}";


        if($mail->send()) {
            echo "
            <script> 
            alert('Mensagem enviada com sucesso!')
            </script>
            ";
        } else {
            echo "
            <script> 
            alert('Erro! E-mail não enviado, tente novamente mais tarde!')
            </script>
                ";
        }
    }else{
        echo "
        <script> 
        alert('Erro ao enviar mensagem, verifique as informações!')
        </script>
        ";
    }
    
}else{
        echo "
        <script> 
        alert('Erro ao enviar mensagem, verifique as informações!')
        </script>
        ";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/valida.css">
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
    <div class='voltar'>
        <a href="contato.php">Voltar</a>
    </div>
    
</main>
    <script src="header.js"></script>
    <script src="slides.js"></script>
</body>
</html>
