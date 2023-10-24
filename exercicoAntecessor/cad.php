<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado desafio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>
        <h1>RESULTADO FINAL</h1>

        <!-- get pode ser usado quando os dados n são sensiveis, ex: pesquisa no google - pode ser compartilhado, envia somente até 3mil bytes que pode ser 3mil letras -->
        <main>
            <?php 
            $numero = isset ($_GET["number"]) ? $_GET["number"] : "";
            
            $antecessor = $numero - 1; 
            $sucessor = $numero + 1;

            echo "NUMERO ESCOLHIDO: ". $numero . "\n";
            echo "SEU ANTECESSOR:" . $antecessor . "\n";
            echo "SEU SUCESSOR:". $sucessor. "\n";
            
            ?>
            <p><a href="javascript:history.go(0-1)">Clique para voltar</a></p>
        </main>

    </div>

</body>

</html>