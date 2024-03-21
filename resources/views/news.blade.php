<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Aplicação</title>
    <style>
        /* Estilos específicos para a página de notícias */
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

        .news {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }

        h2 {
            color: #666;
            margin-bottom: 10px;
        }

        p {
            color: #888;
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
    <h1>Notícias</h1>
    <div class="news">
        <h2>Novo Curso de Programação</h2>
        <p>Estamos felizes em anunciar que estamos lançando um novo curso de programação para estudantes do ensino médio e superior.</p>
        <p>Fique atento para mais detalhes e inscrições em breve!</p>
    </div>
    <div class="news">
        <h2>Evento Cultural</h2>
        <p>No próximo mês, teremos um evento cultural aberto ao público, com apresentações de música, dança e teatro.</p>
        <p>Marque sua presença e junte-se a nós para uma noite de diversão e entretenimento!</p>
    </div>
</div>
</body>
</html>
