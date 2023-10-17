<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processo</h1>
    </header>
    <main>
        <!-- POST o usuario nao ve as informações
            GET o usuario ve as informações -->
        <?php
        $nome = isset($_GET["name"]) ? $_GET["name"] : "";
        $sobrenome = isset($_GET["sobrenome"]) ? $_GET["sobrenome"] : "";
        //var_dump($_GET); 
        echo "Nome: " . $nome . "<br>";
        echo "Sobrenome: " . $sobrenome . "<br><br>";
        ?>
        <p><a href="javascript:history.go(0-1)">Clique para voltar</a></p>
    </main>

</body>

</html>