<?php
use App\Http\Controllers\tarefaController2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerFoto;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources(['/tarefa'=>tarefaController2::class]);
Route::apiResources(['/fotos'=>controllerFoto::class]);