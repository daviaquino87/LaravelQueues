<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

route::post('/sendMail', [EmailController::class, 'sendMail']);
