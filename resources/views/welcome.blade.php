<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Aplicação</title>
    <style>
        .container {
            max-width: 800px;
            margin: 70px auto 20px; 
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
            left: 0; 
            text-align: center; 
        }

        .navbar a {
            display: inline-block;
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
    <a href="/about">Quem Somos</a>
    <a href="/news">Notícias</a>
    <a href="/contact">Contato</a>
</div>
<div class="container">
    <h1>Bem-vindo à Etec Zona Leste</h1>
    <p>Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</p>
    <p>Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
    <p>Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
    <p>Explore nosso site para saber mais</p>
</div>
</body>
</html>
