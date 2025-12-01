<?php

use App\Http\Controllers\CharacterYuGiController;
use Illuminate\Support\Facades\Route;

//realizo la peticion get en la raiz del controlador en la calse index
Route::get('/', [CharacterYuGiController:: class, 'index']); 

