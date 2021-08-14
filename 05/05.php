<?php

    $fruits = [
        [
            "fruit" => "apples",
            "weight" => 6
        ],
        [
            "fruit" => "watermelons",
            "weight" => 25
        ],
        [
            "fruit" => "bananas",
            "weight" => 13
        ]
    ];

    $costs = [
        "overTenKilos" => 1.00,
        "underTenKilos" => 2.00
    ];

    function productsAndCosts(array $products, array $shipping): string {
        $response = null;
        foreach($products as $product){
            if($product['weight'] >= 10){
                $response .= "{$product['fruit']} are {$product['weight']} kg" .
                    " and the shipping cost will be "
                    . number_format($shipping['overTenKilos'], 2) ." euros.\n";
            } else {
                $response .= "{$product['fruit']} are {$product['weight']} kg" .
                    " and the shipping cost will be "
                    . number_format($shipping['underTenKilos'], 2) ." euros.\n";
            }
        }
        return $response;
    }

    echo productsAndCosts($fruits, $costs);