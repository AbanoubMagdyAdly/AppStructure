<?php

namespace App\Services;

class ResponseService{

    
    public static function execute($message, $http_code, $success = true ,$data = null){
        if($success){
            return response()->json([
                "success" => [
                    "message" => $message,
                    "data"    => $data,
                ]
            ], $http_code);
        }
        else{
            return response()->json([
                "error" => [
                    "message" => $message,
                ]
            ], $http_code);
        }
        
    }
}