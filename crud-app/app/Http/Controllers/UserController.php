<?php

namespace App\Http\Controllers;

use App\Helper\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $respone = (new UserService($request->email, $request->password))->register($request->deviceName);
        return response()->json($respone);
    }

    public function login(Request $request)
    {
        # code...
    }
}
