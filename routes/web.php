<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('default');  // assuming 'default' is the name of your main template file
});

