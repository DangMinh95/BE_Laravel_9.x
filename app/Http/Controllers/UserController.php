<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAuthenticatedUser(Request $request)
    : \Illuminate\Http\JsonResponse {
        return response()->json([
            'user' => Auth::user()
        ]);
    }
}
