<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('list_product', [
            'id' => 1,
            'product' => 'Keyboard Mechanical'
        ]);
    }
}
