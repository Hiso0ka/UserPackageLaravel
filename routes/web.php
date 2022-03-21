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
/*
Route::group(array('middleware' => 'auth'), function()
{
  require base_path('routes/usuarios/routes.php');
});*/

Route::get('/', function () {
    return view('layouts.main');
});

Route::get('/usuarios/list', function(){
  return view('usuarios.list');
});

/*Route::get('/', 'App\Http\Controllers\HomeController@verHome')->name('home');

require __DIR__.'/auth.php';*/
