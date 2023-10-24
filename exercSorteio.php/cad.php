<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>TRABALHANDO COM NÚMEROS ALEATÓRIOS</h1>

        <?php 
            $numeroAleatorio = (rand(10,100));

            echo "<p>GERANDO UM NUMERO ALEATÓRIO ENTRE 10 E 100</p>";
            echo "<p>O número sorteado foi <strong>$numeroAleatorio</strong></p>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>
    </main>

</body>

</html>