<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return "Hello Laravel";
});

Route::get('/about', function(){
    return "Return a view";
});

Route::get('/student/{id}', function($id){
    return "student $id";
});

Route::get("/name/{name?}", function(){
    return "Show default name when missing.";
});