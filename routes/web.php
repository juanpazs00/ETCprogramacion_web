<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/contacto', 'contacto')->name('contact'); //para ponerle un nombre a esta ruta

Route::view('/blog', 'blog');

Route::view('/nosotros', 'about');   


// return ['aprendible' =>'.com']; para retornar un formato JSON
//    return 'Hola ETC'; para retornar una cadena de caracteres basica
//    return view('welcome'); para retornar una vista dentro del archivo
