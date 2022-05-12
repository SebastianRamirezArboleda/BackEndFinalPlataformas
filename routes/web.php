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

Route::get('/', function () {
    return view('index');
});
Route::get('/beneficios', function () {
    return view('beneficios');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/personajes', function () {
    return view('personajes');
});
Route::get('/registro', function () {
    return view('registro');
});
Route::get('/renderizarAPI', function () {
    return view('renderizarAPI');
});
Route::get('/acercade', function () {
    return view('acercade');
});
Route::get('/registro', function () {
    return view('registro');
});


//Css
URL::asset('css/style.css');
URL::asset('css/bootstrap.css');
URL::asset('css/fontawesome-all.min.css');

//Javascript
URL::asset('js/app.js');
URL::asset('js/bootstrap.js');
URL::asset('js/easing.js');
URL::asset('js/fontawesome.min.js');
URL::asset('js/jquery-2.2.3.min.js');
URL::asset('js/logeo.js');
URL::asset('js/move-top.js');
URL::asset('js/pristine.js');
URL::asset('js/pristine.min.js');
URL::asset('js/referencias.js');
URL::asset('js/registroLogueo.js');
URL::asset('js/renderizar.js');
URL::asset('js/rotadorBanners.js');
URL::asset('js/SmoothScroll.min.js');

//Images
URL::asset('images/Almirantes.jpg');
URL::asset('images/banderaluffy.png');
URL::asset('images/guerreros.jpg');
URL::asset('images/kurohige.jpg');
URL::asset('images/LuffyVsBlueno.jpg');
URL::asset('images/move-top.png');
URL::asset('images/mugiwaras.jpg');
URL::asset('images/robin.png');
URL::asset('images/roger.laught.jpg');
URL::asset('images/Mikasa.png');
URL::asset('images/sichibukais.png');
URL::asset('images/test.gif');
URL::asset('images/thousand_sunny.jpg');
URL::asset('images/whatsapp.png');


//Scripts
URL::asset('scripts/script.php');