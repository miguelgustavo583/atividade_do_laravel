<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Aplicação</title>
    <style>
        /* Estilos específicos para a página de contato */
        .container {
            max-width: 800px;
            margin: 70px auto 20px; /* Adicionado um espaço no topo para o navbar */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .navbar {
            background-color: #A9A9A9;
            border-radius: 5px;
            overflow: hidden;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0; /* Adicionado para alinhar o navbar à esquerda */
            text-align: center; /* Adicionado para centralizar os links do navbar */
        }

        .navbar a {
            display: inline-block; /* Alterado para exibir os links lado a lado */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #808080;
        }

        .navbar a.active {
            background-color: #808080;
        }
    </style>
</head>
<body class="antialiased">
<div class="navbar">
    <a href="/">Página Inicial</a>
</div>
<div class="container">
    <h1>Contato</h1>
    <p>Entre em contato conosco para obter mais informações sobre nossos cursos, inscrições e eventos.</p>
    <div class="contact-info">
        <p><strong>Telefone:</strong> (11) 1234-5678</p>
        <p><strong>Email:</strong> contato@eteczl.com</p>
        <p><strong>Endereço:</strong> Av aguia de haia, 123 - Cidade AE carvalho</p>
    </div>
</div>
</body>
</html>
