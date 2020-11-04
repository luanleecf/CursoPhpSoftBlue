<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagem PHP</title>
</head>
<body>

<?php

    //Impressão de um resultado.
    echo "Hello World! <br>";

    //CRIAÇÃO DE VARIÁVEIS
    $var1 = "PHP";
    $variavelValor = 50.15;
    echo $var1 . "<BR>"; //ponto, concatena (junta) dois resultados.
    echo $variavelValor . "<BR>";


    //CRIAÇÃO DE CONSTANTES
    define("PI", 3.14);
    define("NOME_EMPRESA", "Softblue");

    $resultado = 3 * PI;
    echo $resultado . "<BR>";
    echo "Nome da empresa: " . NOME_EMPRESA . "<BR>";

    $x = 3 + 5;
    $x = 3 - 5;
    $x = 3 * 5;
    $x = 16 / 5;
    $x = 16 % 5; //resto da divisão
    echo $x . "<BR>";

    $x = 3;
    $y = 1 + ++$x;
    echo "x = " . $x . " e y = " . $y . "<BR>";

    echo round(5.5, 0, PHP_ROUND_HALF_DOWN) . "<BR>"; //COMANDO QUE ARREDONDA EQUAÇÃO PARA BAIXO
    echo round(5.5, 0, PHP_ROUND_HALF_UP) . "<BR>";//COMANDO QUE ARREDONDA EQUAÇÃO PARA CIMA
    echo round(5.5, 0, PHP_ROUND_HALF_EVEN) . "<BR>";//COMANDO QUE ARREDONDA EQUAÇÃO PARA UM Nº PAR
    echo round(5.5, 0, PHP_ROUND_HALF_ODD) . "<BR>";

    echo round(5.55, 1, PHP_ROUND_HALF_DOWN) . "<BR>"; //COMANDO QUE ARREDONDA EQUAÇÃO PARA BAIXO
    echo round(5.55, 1, PHP_ROUND_HALF_UP) . "<BR>";//COMANDO QUE ARREDONDA EQUAÇÃO PARA CIMA
    echo round(5.55, 1, PHP_ROUND_HALF_EVEN) . "<BR>";//COMANDO QUE ARREDONDA EQUAÇÃO PARA UM Nº PAR
    echo round(5.55, 1, PHP_ROUND_HALF_ODD) . "<BR>";

    //CONDIÇÃO IF

    if ( "Softblue" == "Softblue") {
        echo "Condição do comando IF não funciona. <BR>";
    } else {
        echo "NEGADO <BR>";        
    }

    //utilizando operador AND garante que todo o parametro é verdadeiro
    if ( 3 < 4 && 7 < 8) {
        echo "Condição do comando IF não funciona. <BR>";
    } else {
        echo "NEGADO <BR>";        
    }
    //utilizando o operando OU precisa-se que somente um dos operadores seja verdadeiro
    if ( 3 < 4 || 10 < 8) {
        echo "Condição do comando IF não funciona. <BR>";
    } else {
        echo "NEGADO <BR>";        
    }
    
    //DIFERENÇA DE OPERADORES
    // -> ||OUOU 
    // -> | OU
    // -> & AND
    // -> & ANDAND 
    //OPERADORES DUPLOS AVAILAM AS CONDIÇÕES DIRETAS, CASO SEM NECESSIDADE DE ENTRAR NO SEGUNDO PARÂMETRO DO CÓDIGO

    
    //short if
    $x = 10 / 2 == 5 ? "É cinco.<BR>" : "Não é cinco. <BR>";
    echo $x;

    $y = 13;
    $x = $y%2 == 0 ? "PAR.<BR>" : "ÍMPAR <BR>";
    echo $x;

    //


    //SWIT TOMADAS DE DECISÕES DE MULTIPLOS VALORES
    
    $i = 1;

    switch($i){
        case 0:
            echo "O valor de i é 0<BR>";
        break;

        case 1:
            echo "O valor de i é 2<BR>";
        break;

        case 2:
            echo "O valor de i é 3<BR>";
        break;

        default:
            echo "Nenhum <BR>";
        break;

    }

    //REPETIÇÃO: PARA => FOR

    for($i = 0; $i < 10; $i++) {
        if($i == 5) {
            continue;
        }
        echo $i . " ";
    }
    echo "Sequência do código funcionando...<BR>";

    //REPETIÇÃO: ENQUANTO => WHILE
    $i = 0;
    while($i < 5) {
        $i++;
        if($i == 5){
            continue;
        }
        echo $i . " ";
    }
    echo "<BR>";

    //REPETIÇÃO: FAÇA, ENQUANTO => DO WHILE

    $i = 20;

    do {
        $i++;
        echo $i . " ";
    } while ($i < 10);
    echo "<BR>";

    //ANCORAS (NÃO RECOMENDADOS NOS DIAS DE HOJE, SENDO RECOMENDANDO OPERADORES DE COMPARAÇÃO COMO 'IF ELSE')
    echo "Código iniciando... <BR>";
    goto saindo;

    echo "Código executando...<BR>";
    
    saindo:
    echo "Código finalizando ...<BR>";

    //VARIÁVEIS DE SERVIDORES
    echo $_SERVER["SERVER_ADDR"] . "<BR>";
    echo $_SERVER["SERVER_NAME"] . "<BR>";
    echo $_SERVER["HTTP_USER_AGENT"] . "<BR>";
    echo $_SERVER["REMOTE_ADDR"] . "<BR>";

?>
    
</body>
</html>