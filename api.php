<?php
    header('Access-Control-Allow-Origin: *');
    header("content--type: application/json");
    $_DATA = (file_get_contents("php://input")) ? json_decode(file_get_contents("php://input"), true) : ["JS_numero1"];
    $JS_numero1 = (integer) 0;
    $JS_numero2 = (integer) 0;
    extract($_DATA, EXTR_PREFIX_ALL, "JS");

    $IGUALDAD = (string) ($JS_numero1 == $JS_numero) ? "TRUE" : "FALSE";
    $IDENTICO  = (string) ($JS_numero1 === $JS_numero2) ? "TRUE" : "FALSE";
    $DIFERENTE= (string) ($JS_numero1 != $JS_numero2) ? "TRUE" : "FALSE";
    $NO_IDENTICOS= (string) ($JS_numero1 !== $JS_numero2) ? "TRUE" : "FALSE";
    $_DIFERENTE= (string) ($JS_numero1 <> $JS_numero2) ? "TRUE" : "FALSE";
    $MAYOR_QUE = (string) ($JS_numero1 > $JS_numero2) ? "TRUE" : "FALSE";
    $MENOR_QUE = (string) ($JS_numero1 < $JS_numero2) ? "TRUE" : "FALSE";
    $MAYOR_IGUAL =(string) ($JS_numero1 >= $JS_numero2) ? "TRUE" : "FALSE";
    $MENOR_IGUAL =(string) ($JS_numero1 <= $JS_numero2) ? "TRUE" : "FALSE";


    echo <<<JSON
[
    {
        "Operador": "IGUALDAD '==' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 == $JS_numero2: $IGUALDAD"
    },
    {
        "Operador": "IDENTICO '===' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1- ${!${''} = gettype($JS_numero1)} === $JS_numero2- ${!${''} = gettype($JS_numero2)}:$iDENTICO"
    },
    {
        "Operador": "DIFERENTE '!=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 != $JS_numero2:$DIFERENTE"
    },
    {
        "Operador": "DIFERENTE '<>' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 <> $JS_numero2:$_DIFERENTE"
    },
    {
        "Operador": "NO IDENTICOs '!==' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 !== $JS_numero2:$NO_IDENTICOS"
    },
    {
        "Operador": "MAYOR QUE '>' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 > $JS_numero2:$MAYOR_QUE"
    },
    {
        "Operador": "MENOR QUE '<' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 < $JS_numero2:$MENOR_QUE"
    },
    {
        "Operador": "MAYOR IGUAL QUE '>=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 >= $JS_numero2:$MAYOR_IGUAL"
    },
    {
        "Operador": "MENOR IGUAL QUE '<=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 <= $JS_numero2:$MENOR_IGUAL"
    },
    {
        "SERVIDOR": "${!${''} = $_SERVER['HTTP_HOST']}"
    }
    

]

JSON;

?>