<?php

    $stuff = [15, 20, 34, 10.6, "NGC-224"];

    function double(array $arrayOfThings): string {
        $number = null;
        for($i = 0; $i < count($arrayOfThings); $i++){
            if(is_integer($arrayOfThings[$i])){
                $number .= 2 * $arrayOfThings[$i] . "\n";
            }
        }
        return $number;
    }

    echo double($stuff);