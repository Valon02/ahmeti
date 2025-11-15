<?php

use Illuminate\Support\Facades\Route;

// Landningssidan (startsidan)
Route::get('/', function () {
    return view('valon');
});


