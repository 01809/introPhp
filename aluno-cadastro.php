<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Cadastro</title>
</head>
<body>
    <style>
         body
        {
             background-image: linear-gradient(to left, rgb(94, 92, 92),rgba(241, 241, 241, 0.836),rgb(168, 163, 163));
            line-break: loose;
            padding: 10px;
           margin-left: 35%;
           margin-top: 20%;
           max-width: 120vw;
           letter-spacing: 1px;
           display: flex;
           flex-wrap: nowrap;
           flex-direction: row;

        }
    </style>
</body>
</html>



<?php

use BcMath\Number;
use Dom\HTMLElement;

$array = array("aluno"=> "",
"data" => date('d/m/Y'),
"faltas" => number_format(10),
"currency" => 'R$',

'Totalmensalidade' => number_format(100),
);

$aluno_1= 'Jonas';

$mensalidade = number_format(100);
$localCurrency = 'pt_BR';
$currencySign = "R$";

$mensalidadePaga = 20;

$presenca = number_format(10);
$presencaNumero = is_numeric(10);
 
$presencaData = date('d/m/Y');



 echo <<<HTML

 Nome: $aluno_1. <br>
 Data: $presencaData <br>
 Mensalidade Paga: $currencySign $mensalidadePaga <br>


 HTML;




$somaMensal = $mensalidade * $presenca;


// Mensalidade valendo R$100

if($mensalidadePaga == 100 && $somaMensal == 100 ){
  echo 'Pagamento Completo! ';
}

if($mensalidadePaga <= 0 || $mensalidadePaga <= 99){
    echo 'Pagamento Parcial:'. '&nbsp'. '(Entre 50% E 99% da mensalidade)';
}
   
echo '<br>';
if($mensalidadePaga < 50 ){
    echo 'Pagamento Insuficiente:'. '&nbsp'. 'Pagamento inferior a metade da mensalidade!';
}





?>