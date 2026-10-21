<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CantinaController;

Route::get('/admin', [UserController::class, 'index']);

Route::get('/usuarios/novo', [UserController::class, 'create']);
Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/usuarios/{id}/editar', [UserController::class, 'edit']);
Route::put('/usuarios/{id}', [UserController::class, 'update']);

Route::get('/', function () {
    return view('home');
});

Route::view('landing', 'landing');

Route::get('/teste-orm', function () {
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

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/novo', [EventoController::class, 'create']);
Route::post('/eventos', [EventoController::class, 'store']);

// Registra todas as rotas do crud em uma unica linha
Route::resource('cantinas', CantinaController::class);