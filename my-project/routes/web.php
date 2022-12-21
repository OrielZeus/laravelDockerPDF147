<?php

use Illuminate\Support\Facades\Route;

use BigFish\PDF417\PDF417;
use BigFish\PDF417\Renderers\ImageRenderer;
use BigFish\PDF417\Renderers\SvgRenderer;

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

Route::get('/pdf417', function () {
    $pdf417 = new PDF417();
    $data = $pdf417->encode('www.facebook.com/oriel401');

    $renderer = new ImageRenderer([
        'format' => 'data-url'
    ]);
    $img = $renderer->render($data);
        return view('welcome', compact('img'));
    });
Route::get('contact', function(){
    return "Seccion de contactos";
})->name('contactos');
Route::get('/',function(){
    echo "<a href='" . route('contactos') . "'>Contactos 1 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 2 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 3 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 4 </a><br>";
    echo "<a href='" . route('contactos') . "'>Contactos 5 </a><br>";
});
//get with ? means not required value https://omb.cloud.processmaker.net/webentry/request/166/complete_information (edited)
Route::get('saludo/{nombre?}',function($nombre = "Invitado"){
 return "Saludos " . $nombre;
});