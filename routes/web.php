<?php

use App\Http\Controllers\MainTutor;
use App\Http\Controllers\RegistrerControlTu;
use Illuminate\Support\Facades\Route;
use Psy\Readline\HoaConsole;
use App\Http\Controllers\SessionControlTu;
use GuzzleHttp\Promise\Create;
use Illuminate\Contracts\Session\Session;

Route::view('/','Homebm');

Route::get('/main_tutor',[MainTutor::class,'create']);
Route::get('/main_tutor/registrernewtutor',[RegistrerControlTu::class, 'create']);


Route::get('/login',[SessionControlTu::class, 'create']);




