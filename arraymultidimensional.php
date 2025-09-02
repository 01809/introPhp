<?php 
 $frutas =[ ["Nome"=> "Laranja", "Cor" => "Laranja"],
 ["Nome" => "banana", "Cor" => "Amarela"]
];

foreach($frutas as $contador => $fruta){
    echo "Fruta". "&nbsp". ($contador+1). "&nbsp".   ":". "&nbsp". $fruta['Nome']. "&nbsp". "-". "&nbsp". $fruta['Cor']. "&nbsp";
}
?>