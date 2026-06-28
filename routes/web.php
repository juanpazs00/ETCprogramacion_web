<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hola ETC';
//    return view('welcome'); para retornar una vista dentro del archivo
});
