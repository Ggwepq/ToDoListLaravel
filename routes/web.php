<?php

use App\Http\Controllers\ToDoListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToDoListController::class, 'index']); 

Route::post('/saveItem', [ToDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/itemDone/{id}', [ToDoListController::class, 'itemDone'])->name('markDone');