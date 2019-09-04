<?php

namespace App\Services;

use App\Constants\ErrorConstants;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\AuthenticationException;



class AuthenticationService{
    
    public function __construct(){
        
        $this->userRepository = new UserRepository();

    }

    public function execute($email , $password){

        $user = $this->userRepository->findUserByEmail($email);

        if (is_null($user) || Hash::check($password, $user->password)) {

            throw new AuthenticationException(ErrorConstants::NOT_FOUND);
            
        }

        $token = $user->createToken('access')->accessToken;;

        return $token;
    }

}