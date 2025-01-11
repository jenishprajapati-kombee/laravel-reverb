<?php

use App\Livewire\RealTimeMessage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', RealTimeMessage::class);