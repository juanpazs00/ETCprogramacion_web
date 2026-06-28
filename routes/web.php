<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('inicio');

Route::view('/pedrito', 'contacto')->name('contact'); //para ponerle un nombre a esta ruta

Route::view('/loqsea', 'blog')->name('blog');

Route::view('/xD', 'about')->name('nosotros');
// no importa que pongamos en la ruta, el nombre es lo que ahora mandará a la navegacion


// return ['aprendible' =>'.com']; para retornar un formato JSON
//    return 'Hola ETC'; para retornar una cadena de caracteres basica
//    return view('welcome'); para retornar una vista dentro del archivo
