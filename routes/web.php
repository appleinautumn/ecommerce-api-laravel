<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return response()->json([
        'name' => config('app.name'),
        'environment' => config('app.env')
    ]);
});
