<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

/** 
* @OA\Info(title="API Usuarios", version="1.0")
*
* @OA\Server(url="http://localhost:8000")
*/
class ProductController extends Controller
{

    /**
    * @OA\Get(
    *     path="/api/v1/products/frontend",
    *     summary="Listar productos",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los productos."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */
    public function frontend()
    {
        return Product::all();
    }    
}
