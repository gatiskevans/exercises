<?php

    $person1 = new stdClass();
    $person1->name = "Līga";
    $person1->surname = "Kalniņa";
    $person1->age = 15;

    $person2 = new stdClass();
    $person2->name = "Jānis";
    $person2->surname = "Bērziņš";
    $person2->age = 25;

    $person3 = new stdClass();
    $person3->name = "Pēteris";
    $person3->surname = "Pēterspns";
    $person3->age = 21;

    $persons = [
        $person1, $person2, $person3
    ];

    function isEighteenOrNot(array $persons): string {
        $response = '';
        foreach($persons as $person){
            if($person->age >= 18){
                $response .= "{$person->name} - You are at least 18 years old.\n";
            } else {
                $response .= "{$person->name} - You are under 18.\n";
            }
        }
        return $response;
    }

    echo isEighteenOrNot($persons);