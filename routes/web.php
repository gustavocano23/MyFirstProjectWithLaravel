<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "Bienvenido a la pagina de inicio";
// });

// Route::get('saludo/${nombre}', function ($nombre) {
//     return "Saludos " . $nombre;
// });

// Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {
//     return "Saludos " . $nombre;
// });

// Route::get('contactos', function () {
//     return "Estamos en contacto";
// })->name('contactos');

// Route::get('/', function () {
//     echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
//     echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
//     echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
//     echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
//     echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";
// });


// Route::get('/', function () {
//     $nombre = "Gustavo";
//     return view('home')->with('nombre', $nombre);
// })->name('home');

// Route::view('/', 'home', ['nombre', "Jorge"]);



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('/portafolio', \App\Http\Controllers\BriefcaseController::class)->name('portafolio');
Route::post('contact', '\App\Http\Controllers\MessagesController@store');
