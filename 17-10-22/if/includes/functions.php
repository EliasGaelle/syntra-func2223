<?php
date_default_timezone_set("Europe/Brussels");

function getHello($firstname, $name, $sex)
{
    $hour = (int)date("G");
    $firstname = strtolower($name);
    $name = ucfirst($name);
    $hello = "Goedenavond";

    if ($hour < 6) {
        $hello = "Goedenacht";
    } elseif ($hour < 11) {
        $hello = "Goedenmorgen";
    } elseif ($hour < 17) {
        $hello = "Dag";
    }


    $tittle = "";
    // if ($sex == "M") {
    //     $tittle = "Meneer";
    // } elseif ($sex == "F") {
    //     $tittle = "Mevrouw";
    // } elseif ($sex == "X") {
    //     $tittle = "";
    // }

    switch ($sex) {
        case 'm':
            $tittle = "Meneer";
            break;
        case 'f':
            $tittle = "Mevrouw";
            break;
        default:
            $tittle = "";
            break;
    }

    return "$hello $tittle $name,";
}
?>