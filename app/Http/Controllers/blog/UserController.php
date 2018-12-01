<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        return response()->json([
            'name' => 'Somkiat',
            'age' => 30
        ]);
    }

}
