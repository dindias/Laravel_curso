<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return "Hola desde la pagina de inicio";
    //return view('welcome');
});

Route::get('contacto', function () {
    return "Hola desde la pagina de contacto";
});
*/

/*Route::get('saludo/{nombre?}', function($nombre = "usuario") {
    return "Saludos " . $nombre;
});
*/

/*Route::get('contactame', function() {
    return "Sección de contactos";
})->name('contactos');

Route::get('/', function() {
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";
});
*/

/*Route::get('/', function() {
    $nombre = "Dani";
    return view('home', compact('nombre'));
})->name('home');
*/


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');

Route::view('/contact', 'contact')->name('contact');
