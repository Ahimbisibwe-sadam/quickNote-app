<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


// redirect home page to notes index page
Route::get('/', [NoteController::class, 'index'])->name('notes.index');
// automatically generates routes for all CRUD operations except index
Route::resource('notes', NoteController::class)->except(['index']);