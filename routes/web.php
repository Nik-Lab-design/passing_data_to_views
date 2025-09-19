<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = (object) [
        "showroom" => [
            ["id" => 1, "brand" => "Tesla", "model" => "Model S", "price" => 89999],
            ["id" => 2, "brand" => "BMW", "model" => "i4", "price" => 69999],
            ["id" => 3, "brand" => "Mercedes", "model" => "EQE", "price" => 75999],
            ["id" => 4, "brand" => "Audi", "model" => "e-tron", "price" => 82999],
            ["id" => 5, "brand" => "Volkswagen", "model" => "ID.4", "price" => 45999],
            ["id" => 6, "brand" => "Volvo", "model" => "XC40 Recharge", "price" => 51999],
            ["id" => 7, "brand" => "Hyundai", "model" => "Ioniq 5", "price" => 42999],
            ["id" => 8, "brand" => "Kia", "model" => "EV6", "price" => 44999],
            ["id" => 9, "brand" => "Ford", "model" => "Mustang Mach-E", "price" => 55999],
            ["id" => 10, "brand" => "Nissan", "model" => "Ariya", "price" => 39999],
            ["id" => 11, "brand" => "Porsche", "model" => "Taycan", "price" => 99999],
            ["id" => 12, "brand" => "Peugeot", "model" => "e-208", "price" => 25999],
            ["id" => 13, "brand" => "Renault", "model" => "Megane E-Tech", "price" => 31999],
            ["id" => 14, "brand" => "Opel", "model" => "Corsa-e", "price" => 24999],
            ["id" => 15, "brand" => "Fiat", "model" => "500e", "price" => 21999],
            ["id" => 16, "brand" => "Mazda", "model" => "MX-30", "price" => 28999],
            ["id" => 17, "brand" => "Honda", "model" => "e", "price" => 26999],
            ["id" => 18, "brand" => "Jaguar", "model" => "I-Pace", "price" => 79999],
            ["id" => 19, "brand" => "Skoda", "model" => "Enyaq iV", "price" => 37999],
            ["id" => 20, "brand" => "Citroën", "model" => "ë-C4", "price" => 30999],
        ]
    ];

    return view('showroom', compact('data'));
})->name('showroom');

Route::get('/contact', function () {
    $data = (object) [
        "company" => (object) [
            "name" => "bedrijf B.V.",
            "address" => "haarlemmer 42, 1234 AB Amsterdam",
            "phone" => "+31 12 345 6789",
            "email" => "info@bedrijf.nl",
        ]
    ];

    return view('contact', compact('data'));
})->name('contact');