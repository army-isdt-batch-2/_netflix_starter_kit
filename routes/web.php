<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin',[
    App\Http\Controllers\VideoController::class,
    'index'
])->name('admin');

Route::get('/admin/create',[
    App\Http\Controllers\VideoController::class,
    'create'
])->name('admin.create');

Route::post('/admin/create/save',[
    App\Http\Controllers\VideoController::class,
    'create_save'
])->name('admin.create.save');

Route::get('/', function () {
    return view('index');
}); 
Route::get('/watch', function () {
    return view('watch');
});
