<?php

namespace App\Repository;

use App\Models\User;



class UserRepository{

    public function findUserByEmail($email){

        $user = User::where('email', $email)->first();

        return $user;
    }

}