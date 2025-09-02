<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <script>
        var resposta ="";
        for(let i = 1; i <= 10; i++){
            resposta = '${resposta}${numero} x ${i} = ${numer * i}\n ';
        }
    </script>
</body>
</html>

<?php
  $i = 1;

  while($i <= 5){
    echo "Número: $i <br>";
    $i++;
  }
?>