<?php

use App\Http\Controllers\Bookcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// // Route::get('/', function () {
// //     return view('welcome');
// });
Route::get('books',[Bookcontroller::class,'index'])->name('books.index');
Route::get('books/show/{id}', [BookController::class, 'show'] )->name('books.show');
//for creating a new book
Route::get('books/create', [BookController::class, 'create'])->name('books.create') ;
//for storing a new book data into the database
Route::post('/books', [BookController::class, 'store'])->name('books.store') ;

//for editing a book
Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit') ;
Route::post('books/update', [BookController::class,'update'])->name('books.update') ;
//for deleting a book
Route::delete('books/delete', [BookController::class, 'destroy'])->name('books.destroy') ;
