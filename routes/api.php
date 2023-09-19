<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoresController;
use App\Http\Controllers\VendedoresController ;


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

*/
    Route::post('/vendedores',[VendedoresController::class,'store']);
    Route::get('/vendedores',[VendedoresController::class,'index']);
    Route::put('/vendedores/edit/{id}',[VendedoresController::class,'update'])
            ->where('id','[0-9]+');
    Route::delete('/vendedores/delete/{id}',[VendedoresController::class, 'destroy'])
            ->where(['id', '[0-9]+']);    

});