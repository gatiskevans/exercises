<?php

    $number = 104;

    switch($number){
        case $number < 50:
            echo 'Low';
            break;
        case $number >= 50 && $number < 100:
            echo 'Medium';
            break;
        case $number > 100:
            echo 'High';
            break;
        default:
            echo "Something's not right";
            break;
    }