<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body
        {
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
</head>
<body>
    
</body>
</html>


<?php

use BcMath\Number;
  //$nomeNota = $_POST[];

    $productName = "Mouse";
    $validaString= is_string($productName);
    $productValue =  number_format(500);
    $productGastos = 80;

    $somaSaida = $productValue + $productGastos;

    $errorMessage = "";


 if(empty($validaString || is_numeric($productName))){
    echo  "$errorMessage". "&nbsp" ."Valor invalido!!!";
   
 }

 else{
    echo "Nome do Produto:". "&nbsp" ."$productName";
 }

 


 if($somaSaida > 500){
    echo "<br>". "<br>" ."Lucro Alto:". "&nbsp" ."$somaSaida";
 }

 if($somaSaida = 1 || $somaSaida <= 500){
    echo "<br>" ."<br>" ."Lucro Baixo:" ."&nbsp" ."$somaSaida";
 }

 if($somaSaida <= 0 ){
  echo "<br>". "<br>" ."Prejuízo:" ."&nbsp" ."$somaSaida";
 }

  if($productValue <= 0){
   echo "$errorMessage". "&nbsp" ."<br>" ."<br>" ."Valor Inválido!";
 }

 else{
    echo "<br>". "<br>" ."Valor de produto:". "&nbsp" ."$productValue";
 }

  
?>