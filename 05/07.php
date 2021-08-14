<?php

    $person1 = new stdClass();
    $person1->name = "Jānis Bērziņš";
    $person1->license = ["A", "B", "C"];
    $person1->cash = 1500.00;

    $gun1 = new stdClass();
    $gun1->name = "Pistol";
    $gun1->license = "A";
    $gun1->price = 500.00;

    $gun2 = new stdClass();
    $gun2->name = "Bazooka";
    $gun2->license = "B";
    $gun2->price = 4500.00;

    $gun3 = new stdClass();
    $gun3->name = "BB-Gun";
    $gun3->license = "C";
    $gun3->price = 100.00;

    $gun4 = new stdClass();
    $gun4->name = "Magnum";
    $gun4->license = "D";
    $gun4->price = 700.00;

    $gun5 = new stdClass();
    $gun5->name = "Raygun";
    $gun5->license = "E";
    $gun5->price = 1100.00;

    $gun6 = new stdClass();
    $gun6->name = "Infrared Laser Burner";
    $gun6->license = "F";
    $gun6->price = 2500.00;

    $guns = [$gun1, $gun2, $gun3, $gun4, $gun5, $gun6];

    foreach ($guns as $index => $gun){
        echo "{$index} | {$gun->name} ({$gun->price}$) licence - {$gun->license}\n";
    }

    $selection = (int) readline("Hello {$person1->name}. Please chose a weapon: ");

    $isPromptActive = true;
    while($isPromptActive){
        if(!isset($guns[$selection])){
            $selection = (int) readline("Invalid selection. Please try again: ");
        } else {
            $isPromptActive = false;
            $selectedWeapon = $guns[$selection];
            if(in_array($selectedWeapon->license, $person1->license) && $selectedWeapon->price <= $person1->cash){
                echo "You can purchase {$selectedWeapon->name}.";
            } else if(!in_array($selectedWeapon->license, $person1->license)){
                echo "You cannot purchase {$selectedWeapon->name} because you don't have a license.";
            } else {
                echo "You cannot purchase {$selectedWeapon->name}. Insufficient cash.";
            }
        }
    }