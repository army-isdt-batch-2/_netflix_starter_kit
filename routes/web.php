<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin',[
    App\Http\Controllers\VideoController::class,
    'index'
])->name('admin');

Route::get('/', function () {
    return view('index');
}); 
Route::get('/watch', function () {
    return view('watch');
});
