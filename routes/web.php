<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('adddata');
});

Route::view('add','adddata');

Route::controller(CrudController::class)->group(function(){
    Route::post('add','add');
    Route::get('list','list');
    Route::get('delete/{id}','delete');
    Route::get('edit/{id}','edit');
    Route::put('edit-student/{id}','editStudent');
    Route::get('search','search');
});
