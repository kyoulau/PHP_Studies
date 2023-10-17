<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dados do servidor</h1>
    <?php
    //phpinfo();
    $numero = 18;
    $meuNome = "Laura Santos";
    // php apenas inicializa variaveis.
    if (isset($numero)) {
        echo "variavel iniciada com valor $numero. ";
    } else {
        echo "variavel não foi inicializada";
    }

    ?>
</body>

</html>