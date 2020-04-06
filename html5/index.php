<?php

$name = "bob";
echo $name;

$myNumber = 45;
echo "<p>番号：　$myNumber</p>";

echo "<hr>";

$myarrey = array("bob", "mike", "ken");
print_r($myarrey);

echo "<br><br>";


for($i = 0; $i < 4; $i++){
    echo $i."<br>";
}
echo "<br><br>";

for($i = 2; $i <= 20; $i++){
    echo $i."<br>";
}
echo "<hr>";

$family = array("bob", "mike", "ken");
foreach ($family as $key => $value){
    echo $key.":".$value.",";
}