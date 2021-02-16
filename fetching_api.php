<?php

$api_url = 'http://127.0.0.1:8000/versions/';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
// All user data exists in 'data' object
$user_data = $response_data->data;
// Cut long data into small & select only first 10 records
//$user_data = array_slice($user_data, 0, 9);
// Print data if need to debug
//print_r($user_data);
$user_data = array_slice($user_data, 0, 9);
// Traverse array and display user data
foreach($user_data as $result) {
    echo "Year : ";
    print_r($result->attributes->year);
    echo "\n";
    echo "Series : ";
    print_r($result->attributes->series);
    echo "\n";
    echo "Color : ";
    print_r($result->attributes->color);
    echo "\n";
    echo "Tampo : ";
    print_r($result->attributes->tampo);
    echo "\n";
    echo "Base color : ";
    print_r($result->attributes->base_color);
    echo "\n";
    echo "Window color : ";
    print_r($result->attributes->window_color);
    echo "\n";
    echo "Interior color : ";
    print_r($result->attributes->interior_color);
    echo "\n";
    echo "Wheel type : ";
    print_r($result->attributes->wheel_type);
    echo "\n";
    echo "Toy : ";
    print_r($result->attributes->toy);
    echo "\n";
    echo "Country : ";
    print_r($result->attributes->country);
    echo "\n";
    echo "\n";
}
?>