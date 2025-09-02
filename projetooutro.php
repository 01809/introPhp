<?php 

$usuarios = [

    ["Nome" => "Ana", "Email"=> "ana1@gmail.com", "Idade"=>20],
];


echo "<h2>Usuários maiores de idade</h2><br>";

foreach ($usuarios as $usuario) {
    if ($usuario["Idade"] >= 18) {
        echo "Nome: {$usuario['Nome']} - Email: {$usuario['Email']} - Idade: {$usuario['Idade']}<br>";
    }
}

echo "<h2>Usuários menores de idade</h2>";
foreach ($usuarios as $usuario) {
    if ($usuario['Idade'] < 18) {
        echo "Nome: {$usuario['Nome']} - Email: {$usuario['Email']} - Idade: {$usuario['Idade']}<br>";
    }
}

echo "<h2>Contando os Usuários</h2>";

$contador = 0;

while ($contador < count($usuarios)) {
    $numero = $contador + 1;

    echo "Usuário {$numero} - Nome: {$usuarios[$contador]['Nome']} - Email: 
    
    {$usuarios[$contador]['Email']} - 

    Idade: {$usuarios[$contador]['Idade']}<br>";

    $contador++;
}

$limite = min(2,count($usuarios));

for($i = 0; $i < $limite; $i++){

    $c= $i + 1;
    echo "Usuario {$c} - Nome: {$usuarios[$i]['Nome']}";
}



?>