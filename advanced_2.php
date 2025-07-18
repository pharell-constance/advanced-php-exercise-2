<?php

$commandes = [
    [
        "id" => 1,
        "client" => "Harry",
        "potion" => "Invisibilité",
        "prix" => 49.99,
        "etat" => "payé",
    ],
    [
        "id" => 2,
        "client" => "Hermione",
        "potion" => "Mémoire",
        "prix" => 39.5,
        "etat" => "payé",
    ],
    [
        "id" => 3,
        "client" => "Ron",
        "potion" => "Courage",
        "prix" => 29.99,
        "etat" => "préparation",
    ],
    [
        "id" => 4,
        "client" => "Drago",
        "potion" => "Puissance",
        "prix" => 59.0,
        "etat" => "payé",
    ],
    [
        "id" => 5,
        "client" => "Luna",
        "potion" => "Rêves",
        "prix" => 44.0,
        "etat" => "impayé",
    ],
    [
        "id" => 6,
        "client" => "Neville",
        "potion" => "Mémoire",
        "prix" => 39.5,
        "etat" => "payé",
    ],
    [
        "id" => 7,
        "client" => "Ginny",
        "potion" => "Charme",
        "prix" => 38.8,
        "etat" => "préparation",
    ],
    [
        "id" => 8,
        "client" => "Sirius",
        "potion" => "Métamorphose",
        "prix" => 62.0,
        "etat" => "payé",
    ],
    [
        "id" => 9,
        "client" => "Remus",
        "potion" => "Loup-Garou",
        "prix" => 70.0,
        "etat" => "impayé",
    ],
    [
        "id" => 10,
        "client" => "Tonks",
        "potion" => "Caméléon",
        "prix" => 56.2,
        "etat" => "préparation",
    ],
    [
        "id" => 11,
        "client" => "Fred",
        "potion" => "Explosion",
        "prix" => 27.99,
        "etat" => "payé",
    ],
    [
        "id" => 12,
        "client" => "George",
        "potion" => "Explosion",
        "prix" => 27.99,
        "etat" => "payé",
    ],
    [
        "id" => 13,
        "client" => "Dumbledore",
        "potion" => "Sérénité",
        "prix" => 89.99,
        "etat" => "payé",
    ],
    [
        "id" => 14,
        "client" => "Hagrid",
        "potion" => "Puissance",
        "prix" => 59.0,
        "etat" => "préparation",
    ],
    [
        "id" => 15,
        "client" => "McGonagall",
        "potion" => "Concentration",
        "prix" => 54.75,
        "etat" => "payé",
    ],
    [
        "id" => 16,
        "client" => "Cho",
        "potion" => "Charme",
        "prix" => 38.8,
        "etat" => "impayé",
    ],
    [
        "id" => 17,
        "client" => "Seamus",
        "potion" => "Explosion",
        "prix" => 27.99,
        "etat" => "payé",
    ],
    [
        "id" => 18,
        "client" => "Dean",
        "potion" => "Courage",
        "prix" => 29.99,
        "etat" => "payé",
    ],
    [
        "id" => 19,
        "client" => "Firenze",
        "potion" => "Invisibilité",
        "prix" => 49.99,
        "etat" => "payé",
    ],
    [
        "id" => 20,
        "client" => "Krum",
        "potion" => "Courage",
        "prix" => 29.99,
        "etat" => "impayé",
    ],
    [
        "id" => 21,
        "client" => "Fleur",
        "potion" => "Charme",
        "prix" => 38.8,
        "etat" => "payé",
    ],
    [
        "id" => 22,
        "client" => "Bill",
        "potion" => "Mémoire",
        "prix" => 39.5,
        "etat" => "payé",
    ],
    [
        "id" => 23,
        "client" => "Molly",
        "potion" => "Explosion",
        "prix" => 27.99,
        "etat" => "préparation",
    ],
    [
        "id" => 24,
        "client" => "Arthur",
        "potion" => "Métamorphose",
        "prix" => 62.0,
        "etat" => "payé",
    ],
    [
        "id" => 25,
        "client" => "Percy",
        "potion" => "Concentration",
        "prix" => 54.75,
        "etat" => "payé",
    ],
    [
        "id" => 26,
        "client" => "Lavande",
        "potion" => "Rêves",
        "prix" => 44.0,
        "etat" => "impayé",
    ],
    [
        "id" => 27,
        "client" => "Trelawney",
        "potion" => "Sérénité",
        "prix" => 89.99,
        "etat" => "préparation",
    ],
    [
        "id" => 28,
        "client" => "Kingsley",
        "potion" => "Invisibilité",
        "prix" => 49.99,
        "etat" => "payé",
    ],
    [
        "id" => 29,
        "client" => "Barty",
        "potion" => "Métamorphose",
        "prix" => 62.0,
        "etat" => "impayé",
    ],
    [
        "id" => 30,
        "client" => "Dolores",
        "potion" => "Explosion",
        "prix" => 27.99,
        "etat" => "payé",
    ],
];

$coutsProduction = [
    "Invisibilité" => 15.0,
    "Explosion" => 10.0,
    "Mémoire" => 14.0,
    "Courage" => 12.0,
    "Puissance" => 18.0,
    "Rêves" => 13.0,
    "Charme" => 11.0,
    "Métamorphose" => 20.0,
    "Loup-Garou" => 22.0,
    "Caméléon" => 16.0,
    "Sérénité" => 25.0,
    "Concentration" => 17.0,
];

echo count($commandes);

$impaye = 0;

foreach ($commandes as $commandeImpaye) {
    if ($commandeImpaye["etat"] == "impayé") {
        $impaye += 1;
    } else {
        $impaye += 0;
    }
}

echo "<br>" . $impaye;

$enPreparations = 0;

foreach ($commandes as $commandeEnPreparation) {
    if ($commandeEnPreparation["etat"] == "préparation") {
        $enPreparations += 1;
    } else {
        $enPreparations += 0;
    }
}

echo "<br>" . $enPreparations;

$personnesDifferentes = 0;

foreach ($commandes as $personnes) {
    if ($personnes["client"] >= 1) {
        $personnesDifferentes += 1;
    } else {
        $personnesDifferentes += 0;
    }
}

echo "<br>" . $personnesDifferentes;

$turnovers = 0;

foreach ($commandes as $turnover) {
    if ($turnover["etat"] == "payé") {
        $turnovers += $turnover["prix"];
    }
}

echo "<br>" . $turnovers;

$unpaidTurnovers = 0;

foreach ($commandes as $unpaidTurnover) {
    if ($unpaidTurnover["etat"] == "impayé") {
        $unpaidTurnovers += $unpaidTurnover["prix"];
    }
}

echo "<br>" .
    $unpaidTurnovers .
    " : " .
    number_format(
        100 * ($unpaidTurnovers / ($unpaidTurnovers + $turnovers)),
        2
    ) .
    " %";

$inPreparationTurnovers = 0;

foreach ($commandes as $inPreparationTurnover) {
    if ($inPreparationTurnover["etat"] == "préparation") {
        $inPreparationTurnovers += $inPreparationTurnover["prix"];
    }
}

echo "<br>" .
    $inPreparationTurnovers .
    " : " .
    number_format(
        100 *
            ($inPreparationTurnovers / ($inPreparationTurnovers + $turnovers)),
        2
    ) .
    " %";

$totalProfits = 0;

foreach ($commandes as $totalProfit) {
    foreach ($coutsProduction as $noProfit) {
        $totalProfits += $totalProfit["prix"] - $noProfit;
    }
}

echo "<br>" . $totalProfits;




    $Invisibilité= 0 ;
    $Mémoire= 0;
    $Courage= 0;
    $Puissance= 0;
    $Rêves= 0;
    $Charme= 0;
    $Métamorphose= 0; 
    $LoupGarou= 0; 
    $Caméléon= 0; 
    $Sérénité= 0;
    $Concentration= 0;



    foreach ($commandes as $potionsSales){
        if ($potionsSales["potion"] == "Invisibilité"){
            $Invisibilité ++ ;}elseif($potionsSales["potion"] == "Mémoire"){
            $Mémoire ++;}elseif($potionsSales["potion"] == "Courage"){
            $Courage ++;}elseif($potionsSales["potion"] == "Puissance"){
            $Puissance ++;}elseif($potionsSales["potion"] == "Rêves"){
            $Rêves ++;}elseif($potionsSales["potion"] == "Charme"){
            $Charme ++;}elseif($potionsSales["potion"] == "Métamorphose"){
            $Métamorphose ++;}elseif($potionsSales["potion"] == "LoupGarou"){
            $LoupGarou ++;}elseif($potionsSales["potion"] == "Caméléon"){
            $Caméléon ++;}elseif($potionsSales["potion"] == "Sérénité"){
            $Sérénité ++;}elseif($potionsSales["potion"] == "Concentration"){
            $Concentration ++;}else{
                
            }            
            }
            
        
        
    
;

echo "<br><br> potion d'Invisibilité : ".$Invisibilité;
echo "<br> potion de Mémoire : ".$Mémoire;
echo "<br> potion de Courage : ".$Courage;
echo "<br> potion de Puissance : ".$Puissance;
echo "<br> potion de Rêves : ".$Rêves;
echo "<br> potion de Charme : ".$Charme;
echo "<br> potion de Métamorphose : ".$Métamorphose;
echo "<br> potion de LoupGarou : ".$LoupGarou;
echo "<br> potion de Sérénité : ".$Sérénité;
echo "<br> potion de Concentration : ".$Concentration;


?>


