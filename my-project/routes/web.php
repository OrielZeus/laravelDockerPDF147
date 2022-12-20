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

Route::get('/home', function () {
    $pdf417 = new PDF417();
    $data = $pdf417->encode('www.facebook.com/oriel401');

    $renderer = new ImageRenderer([
        'format' => 'data-url'
    ]);
    $img = $renderer->render($data);
        return view('welcome', compact('img'));
    });
