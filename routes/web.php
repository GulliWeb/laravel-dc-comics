<?php

use Illuminate\Support\Facades\Route;

// Aggiungo una rotta per visualizzare la home
Route::get('/home', function() {
    return view('Supercars/pages.home');
});

// Aggiungo la rotta per il mio file supercars/index.blade.php
Route::get('/supercars', function(){
    return view('Supercars/supercars.index');
}) -> name("supercars.index");