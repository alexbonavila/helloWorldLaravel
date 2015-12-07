<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\HolaMon;

Route::get('/', function () {
    return view('wellcome');
});

/*Controllers*/
Route::resource('/persons', 'PersonsController');
Route::resource('/holamon', 'HolaMonController');
Route::resource('/user', 'UserController');




Route::get('/prova1', function()
{
    $content = "HoLa";
    $status= 200;
    $contentType= "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('/prova2', function () {
    $content = 'Hello world';
    $status = 200;
    $contentType = "text/plain";
    return response($content, $status)
        ->header('Content-Type', $contentType)
        ->header('MyHeader', "HOLA");
});


Route::get('/prova3', function () {
    $content = '<h1>Hello world </h1>';
    $status = 200;
    $contentType = "application/pdf";
    return response($content, $status)
        ->header('Content-Type', $contentType);
});

Route::get('/prova8', function()
{
    $pathToFile=public_path('prova.pdf');
    //dd($pathToFile);
    return response()->download($pathToFile);
});

Route::get('/prova9', function () {
    return response()->json([
        'name' => 'Abigali', 'state' => 'CA'
    ]);
});

Route::get('prova10', function () {
    return response()->json([
        'name' => 'Abigale', 'state' => 'CA' ]);
});

Route::get('prova11', function () {

    return redirect('http://www.google.com');

});


