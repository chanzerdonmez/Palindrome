<?php


//saisir un mot
//($i =0;$i < 4;++$i)

function verifier(string $s):bool 
{
    $resultat = false;

    // 1. lit de gauche à droite
    // 2. lit de droite à gauche
    // 3. on check si les 2 sont pareils
    
    $lectureGaucheADroite = '';
    for ($i=0; $i < strlen($s); ++$i)
    {
        $lettre = $s[$i];
        $lectureGaucheADroite = $lectureGaucheADroite . $lettre; // concatenatiton
    }

    $lectureDroiteAGauche = '';
    for ($i=strlen($s) -1; $i >= 0; $i = $i -1)
    {
        $lettre = $s[$i];
        $lectureDroiteAGauche = $lectureDroiteAGauche . $lettre; // concatenatiton
    }

    if ($lectureDroiteAGauche == $lectureGaucheADroite)
    {
        $resultat = true;
    }

    return $resultat;
}

verifier('toi');

$saisie = readline ('Zyva donne:');
$caca = verifier ($saisie);
var_dump($caca);





$tab = [2, 3, 5];
for ($i = 0; $i < count ($tab);++$i) {
    $element = $tab[$i];
    
    var_dump($element);
}