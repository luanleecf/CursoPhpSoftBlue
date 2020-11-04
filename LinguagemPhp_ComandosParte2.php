<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagem PHP</title>
</head>
<body>

<?php

    echo "Iniciando <BR>";
    //permite a inclusão se caso for necessário incluir mais de uma vez, se o arquivo não existir, ele executa normalmente a continuação do código.
    //include("LinguagemPhp_ArquivoAuxiliar.php");
    
    //include_once não inclui mais de uma vez
    //include_once("LinguagemPhp_ArquivoAuxiliar.php");
    
    //REQUIRE verifica se o arquivo realmente existe antes de executar. Caso não exista, finaliza a execução do código.
    require("LinguagemPhp_ArquivoAuxiliar.php");
    //REQUIRE verifica se o arquivo realmente existe antes de executar. Caso não exista, finaliza a execução do código. Não repete caso senha chamado outra vez.
    require_once("LinguagemPhp_ArquivoAuxiliar.php");
    
    echo "Finalizando <BR>";

    //redireciona para um local/endereço configurado. Não funciona dessa forma nos php < 7. Sendo necessário inlcuir outras configuações.
    //header("Location: http://www.google.com.br");

    function minhaFuncaoDobro($valor) {
        $valor = $valor * 2;
        return $valor;
    }

    $x = minhaFuncaoDobro(5);
    echo $x . "<BR>";


    function minhaSoma(int $valor1, int $valor2): int {
        return $valor1 + $valor2;
    }

    $x = minhaSoma(5,8);
    echo $x . "<BR";
    
?>
    
</body>
</html>