<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>IntroPHP</title>
   <style>
      body{
         justify-content: center;
         padding: 10px;
      }
   </style>
</head>
<body>
   <form action="" method="post">
      <label for="" ></label>
      <input type="text" name="nome">
   </form>

   <div ></div>
</body>
</html>

<?php

$nome = "Maria";
$idade = 70;
$nomen = $_POST["nome"];
echo "Bem vindo (a) $nome <br>";
echo "Sua idade: $idade anos<br>";


if(empty($nomen))
$a = 2;
$b = 3;
$soma = $a + $b;

echo "A soma de". "&nbsp". $a. "&nbsp". "com". "&nbsp". $b. "&nbsp". "é" . number_format($soma, 2)."<br>";
echo "<br>";

if($idade >= 18 && $idade){
   echo "Acesso Permitido". "&nbsp";
}

else{
   echo "Acesso Negado";
}

if($idade > 60){
   echo "com cautelas";
}


 
?>

<p><?php echo $nomen;?></p>