<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(){

        $this->middleware(['auth:api']);
    }

    public function __invoke(){

        return response()->json([
            [
                'id' => 1,
                'name' => 'test',
                'date' => 201
            ],
            [
                'id' => 2,
                'name' => 'james',
                'date' => 2039
            ]
        ]);
    }
}
