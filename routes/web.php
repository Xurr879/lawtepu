<?php

use App\Http\Controllers\rerollController;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/index', function () {
    return view('index');
});