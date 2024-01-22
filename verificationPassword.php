<?php

function verificationPassword($password)
{

    $verifLength = strlen($password) >= 8;
    $verifMajuscule = preg_match('#[A-Z]#', $password);
    $verifMiniscule = preg_match('#[a-z]#', $password);
    if ($verifLength && $verifMajuscule && $verifMiniscule) {
        return true;
    } else {
        return false;
    }
}

$motDePasse = "ExemplePassword";
$resultat = verificationPassword($motDePasse);

if ($resultat) {
    echo "Le mot de passe respecte les critères.";
} else {
    echo "Le mot de passe ne respecte pas les critères.";
}
