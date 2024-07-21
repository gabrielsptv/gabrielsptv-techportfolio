<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .full-screen-bg {
            position: relative;
            background-image: url('/img/fundo.jpeg'); /* substitua pelo caminho da sua imagem */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .full-screen-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Ajuste a opacidade conforme necessário */
            z-index: 1;
        }
        .center-title {
            position: relative;
            z-index: 2;
            text-align: center;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="full-screen-bg">
        <h1 class="center-title">Bem-vindo ao Meu Site</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
