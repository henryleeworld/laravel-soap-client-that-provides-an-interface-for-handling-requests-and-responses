<?php

use App\Http\Controllers\SoapClientController;
use Illuminate\Support\Facades\Route;

Route::get('soap/client/add/', [SoapClientController::class, 'add']);
