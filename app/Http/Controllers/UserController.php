<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthenticationService;
use App\Services\ResponseService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

        $this->authenticationService = new AuthenticationService();

    }

    public function login(LoginRequest $request){

        $token = $this->authenticationService->execute($request->email,$request->password);

        return ResponseService::execute('success', 200 ,true, $token);

    }
}
