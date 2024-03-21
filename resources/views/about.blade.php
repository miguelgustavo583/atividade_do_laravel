<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Aplicação</title>
    <style>
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
    <h1>Quem Somos</h1>
    <p>A Escola Técnica Estadual (ETEC) da Zona Leste é uma instituição de ensino comprometida com a excelência acadêmica e a formação integral dos seus estudantes. Localizada em uma das regiões mais dinâmicas e vibrantes da cidade, nossa escola se destaca como um polo de educação técnica de qualidade.</p>
    <p>Contamos com uma equipe de profissionais qualificados e dedicados, composta por professores, coordenadores, funcionários administrativos e de apoio, que trabalham em conjunto para garantir o melhor ambiente de aprendizado e desenvolvimento para nossos alunos.</p>
</div>
</body>
</html>
