<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistance.php';
require 'PokeBag.php';

prettyPrint(Pokemon::$Counter);

$pokebag = new PokeBag();

$g = new Pokemon("Pikachu", 60, "Lightning");
$g->Weakness = new Weakness("Fire", 1.5);
$g->Resistance = new Resistance("Fighting", 20);
$g->Attacks[] = new Attack("Electric Ring", 50);
$g->Attacks[] = new Attack("Pika Punch", 20);
$pokebag->Add($g);

prettyPrint($g);

$t = new Pokemon("Charmeleon", 60, "Fire");
$t->Weakness = new Weakness("Water", 2);
$t->Resistance = new Resistance("Lightning", 10);
$t->Attacks[] = new Attack("Head Butt", 10);
$t->Attacks[] = new Attack("Flare", 30);
$pokebag->Add($t);

$y = new Pokemon("Onyx", 60, "Electric");
$pokebag->Add($y);


prettyPrint($t);

echo "<h1>Pokebag</h1>";
prettyPrint($pokebag->GetAllNames());

echo "<h1>Random</h1>";
prettyPrint($pokebag->Random());

echo "<h1>Get(5)</h1>";
prettyPrint($pokebag->Get(5));


foreach($g->Attacks as $attack) {
    prettyPrint("Execute attack " . $attack->Name . ' on ' . $t->Name);
    $attack->Execute($t);
}

prettyPrint($t);






function prettyPrint($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}