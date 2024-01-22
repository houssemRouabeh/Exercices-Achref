<?php

function remplacerLesLettres($chaine)
{
    // $chaine = strtolower($chaine);
    // $chaineFinal = "";
    // for ($i = 0; $i < strlen($chaine); $i++) {

    //     switch ($chaine[$i]) {
    //         case 'e':
    //             $chaineFinal .= 3;
    //             break;
    //         case 'i':
    //             $chaineFinal .= 1;
    //             break;
    //         case 'o':
    //             $chaineFinal .= 0;
    //             break;
    //         default:
    //             $chaineFinal .= $chaine[$i];
    //             break;
    //     }
    // }
    // return $chaineFinal;

    //2eme methode
    // Remplacer les "e" par des "3"
    $chaine = str_replace('e', '3', $chaine);

    // Remplacer les "i" par des "1"
    $chaine = str_replace('i', '1', $chaine);

    // Remplacer les "o" par des "0"
    $chaine = str_replace('o', '0', $chaine);

    return $chaine;
}


echo remplacerLesLettres("Bonjour les amis");
echo '<br>';
echo remplacerLesLettres("Les cours de programmation Web sont trops cools");
