<?php

use Illuminate\Support\Facades\Route;

// Aggiungo una rotta per visualizzare la home
Route::get('/home', function() {
    return view('Supercars/pages.home');
});