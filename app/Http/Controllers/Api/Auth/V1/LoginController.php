<?php

namespace App\Http\Controllers\Api\Auth\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return response()->json([
                'status'     => 200,
                'statusText' => 'Success',
                'token'      => $request->user()->createToken($request->name)->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status'     => 401,
                'statusText' => 'Na esta  autorizado',
            ]);

        }

    }
    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
            'name'     => 'required',
        ]);
    }
}
