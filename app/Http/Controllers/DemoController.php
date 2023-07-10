<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $array = [

            [
                'name' => 'alyus',
                'email' => 'alyus@gmail.com'

            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com'

            ]

        ];

        return response()->json([
            'message' => '2 Users found',
            'data' => $array,
            'status' => true
        ], 200);
    }
}
