<?php

use App\Http\Controllers\CreateUserControler;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);







Route::get('/criar_usuario', [CreateUserControler::class, 'create'])->name('cadastro');

Route::get('/login', [CreateUserControler::class, 'login'])->name('login');

Route::post('/salvar_usuario', [CreateUserControler::class, 'save'])->name('salvar');

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/raphael', function () {
    return view('raphael');
});
Route::get('/create_user', [UserController::class, 'create']
);
Route::post('/save_user', 
    [CreateUserController::class, 'save']
);
*/