<?php

    $person = new stdClass();

    $person->name = "Līga";
    $person->surname = "Kalniņa";
    $person->age = 15;

    function isAnAdult(stdClass $person): string{
        if($person->age >= 18){
            return "You have reached at least 18 years of age";
        } else {
            return "You're a minor. Go home!";
        }
    }

    echo isAnAdult($person);