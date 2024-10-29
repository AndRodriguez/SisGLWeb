<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Detail;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/productos', function () {
    return view('products/products');
})->name('productos');

Route::get('/proveedores', function () {
    return view('providers/providers');
})->name('proveedores');
Route::get('/reportes', function () {
    return view('resume/resume');
})->name('reportes');
Route::get('/usuarios', function () {
    return view('users/users');
})->name('usuarios');

Route::group(['middleware'=>'auth'], function(){


}

);

Route::get('prueba', function(){
    return Detail::all();
});

