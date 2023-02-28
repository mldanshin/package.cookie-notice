<?php

use Illuminate\Support\Facades\Route;
use Danshin\CookieNotice\Http\Controllers\ConfirmationCookieController;

Route::post('danshin/confirm-cookie', ConfirmationCookieController::class)->name("danshin.confirmation-cookie");
