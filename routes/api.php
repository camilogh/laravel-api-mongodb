<?php

use App\Http\Controllers\Api\V1\ProductController as ProductV1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('v1/products/frontend',[ProductV1::class, 'frontend']);