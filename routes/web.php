<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/saludo", function(){
    return "Hola Saludos...";
});

Route::get("/saludos/{nombre}/{pais}", function($nom, $pais){
    return [ "mensaje" => "Hola ".$nom.", saludos a: ".$pais ];
});