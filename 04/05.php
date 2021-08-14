<?php

    $persons = [
        0 => new stdClass(),
        1 => new stdClass()
    ];

    $persons[0]->name = 'Jānis';
    $persons[0]->surname = "Bērziņš";
    $persons[0]->age = 25;
    $persons[0]->birthday = "Jan 2nd 1996";

    $persons[1]->name = "Pēteris";
    $persons[1]->surname = "Kalniņš";
    $persons[1]->age = 35;
    $persons[1]->birthday = "August 9th 1986";

    for($person = 0; $person < count($persons); $person++){
        echo $persons[$person]->name . ' ';
        echo $persons[$person]->surname . ' ';
        echo $persons[$person]->age . ' ';
        echo $persons[$person]->birthday . "\n";
    }