<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/usuarios/list', 'App\Http\Controllers\UsuariosController@verUsuarios')->name('usuarios.list');


 ?>
