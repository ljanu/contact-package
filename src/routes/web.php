<?php

use Tudy\Contact\Http\Controller\ContactController;


Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'send']);

