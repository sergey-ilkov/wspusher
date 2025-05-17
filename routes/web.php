<?php

use App\Http\Controllers\ReactionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Broadcasting pusher';
});


Route::get('/reaction', [ReactionController::class, 'index'])->name('reaction');
Route::post('/reaction', [ReactionController::class, 'reaction'])->name('reaction.send');
