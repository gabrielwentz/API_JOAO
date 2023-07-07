<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 Route::get('/tarefas', [TarefaController::class, 'index']);
 Route::get('/tarefas', [TarefaController::class, 'index']); 
Route::post('/tarefas', [TarefaController::class, 'store']); 
Route::get('/tarefas/{tarefas}', [TarefaController::class, 'show']);
Route::put('/tarefas/{tarefas}', [TarefaController::class, 'update']); 
Route::delete ('/tarefas/{tarefas}', [TarefaController::class, 'destroy']); 