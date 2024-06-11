<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>fase1</title>
</head>
<body>

    <div class="fundo">
        <a href="index.php"><h1 id="titulo">Rythim game</h1></a>
        <div id="tela">
            <h1 class="marcador">Combo</h1>
            <h1 id="cont">0</h1>
            <h1>Pontuação</h1>
            <h1 id="point" name = "pontuacao">0</h1>
            <button id="f" class="botao" onclick="press(2)">F</button>
            <button id="j" class="botao" onclick="press(3)">J</button>
            <button id="k" class="botao" onclick="press(4)">K</button>
            <button id="d" class="botao" onclick="press(1)">D</button>
            <img src="../img/traco_preto.png" id="t1">
            <img src="../img/traco_preto.png" id="t2">
            <img src="../img/traco_preto.png" id="t3">
            <img src="../img/traco_preto.png" id="t4">
            <h1>Maior Pontuação:</h1>
            <h1>0</h1>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>