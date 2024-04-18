<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'welcom_index']);
//to view produts 
Route::get('/photos',[UserController::class,'index'])->name("index");

//to make product data
Route::get("/photos/create",[UserController::class,'create'])->name("create");

//to save product in DB

Route::post('/photos', [UserController::class,'store'])->name('store');

//to view product 

Route:: get('/photos/{id}',[UserController::class,'show'])->name('show');

//to edit product

Route::get('/photos/{id}/edi',[UserController::class,'edit'])->name('edit');

//to update form product

Route::put('/photos/{id}',[UserController::class,'update'])->name('update');

//to delet product

Route::delete('/photos/{id}',[UserController::class,'destroy'])->name('destroy');