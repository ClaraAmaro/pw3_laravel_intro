<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UserController;

Route::get('/', function (){
    return view('home');
});

Route::view('landing', 'landing');
Route::view('/admin', 'admin.dashboard');

// Rota para calcular o formulario (GET)
Route::get('usuarios/novo', [UserController::class, 'create']);

// Rota para salvar os dados enviados (POST)
Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/teste-orm', function(){
    User::create([
        'name' => 'Ana Clara Santos',
        'email' => 'ana.santos@escola.sp.gov.br',
        'password' => '12345678'
    ]);

    return User::all();
});

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos', [ProdutoController::class, 'store']);

Route::get('/livros', [LivroController::class, 'index']);
Route::post('/livros', [LivroController::class, 'store']);
