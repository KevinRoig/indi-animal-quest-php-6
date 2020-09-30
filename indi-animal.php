<?php

function writeSecretSentence (string $parametre1, string $parametre2) : string
{
    return "$parametre1 s'incline face à $parametre2";
} 
echo writeSecretSentence("L'hippopotame", "l'éléphant (non parce que quand même, c'est super fort un hippopotame!)");
