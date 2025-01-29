<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => response()->json('Blog Post API First'));
