<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro código PHP</title>
</head>

<body>
    <h1>
        <?php
        //funções php
        $numero = abs(600);
        $numeroNegativo = abs(-700);
        //retorna o valor absoluto de um numero
        print("a resposta com função abs é  $numero, $numeroNegativo");
        ?>
    </h1>

    <?php 
    //função base_convert = calculo de conversão para hexadecimais ou binarios
    //função ceil()
    //função floor()
    //função round()= arredonda o numero
    //função intdiv() = mostra um resultado inteiro e ignora a divida periodoca.

    $r = intdiv(5,2);
    print($r);

    //função min() = retorna o menor valor
    //função max() = retorna o maior valor, ambos não importa se repetir o numero

    //função pi() ou M_PI - funcionará como constante = valor pi

    //função pow() = resolve uma potêncis
    $p =pow(5,2);
    print(" o valor da potencia é $p")

    //utilizando a função nós perdemos a ordem de precedencia
    //sqrt()= calcula raiz quadrada
    ?>

</body>

</html>