<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoresController;

Route::prefix('v1')->group(function () {
    Route::post('/monitores', [MonitoresController::class, 'store']);
    Route::get('/monitores', [MonitoresController::class, 'index']);
    Route::put('/monitores/edit/{id}', [MonitoresController::class, 'update'])
        ->where(['id', '[0-9]+']);
    Route::delete('/monitores/delete/{id}',[MonitoresController::class, 'destroy'])
        ->where(['id', '[0-9]+']); 
        /*
    Route::post('/libros', [Libros_Controller::class, 'store']);
    Route::get('libros', [Libros_Controller::class, 'index']);
    Route::put('/libros/edit/{id}', [Libros_Controller::class, 'update'])
        ->where(['id', '[0-9]+']);
    Route::delete('/libros/delete/{id}',[Libros_Controller::class, 'destroy'])
        ->where(['id', '[0-9]+']);    


    Route::post('/vendedores',[VendedorController::class,'store']);
    Route::get('/vendedores',[VendedorController::class,'index']);
    Route::put('/vendedores/edit/{id}',[VendedorController::class,'update'])
            ->where('id','[0-9]+');
    Route::delete('/vendedores/delete/{id}',[VendedorController::class, 'destroy'])
            ->where(['id', '[0-9]+']);    
*/
});