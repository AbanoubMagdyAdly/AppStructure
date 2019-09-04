<?php

namespace App\Constants;

use Symfony\Component\HttpFoundation\Response;

class ErrorConstants{

    public const  NOT_FOUND             = 'Not Found';                                     
    public const  EMAIL_REQUIRED        = 'Email is required';
    public const  EMAIL_FORMAT          = 'Wrong email format';
    public const  PASSWORD_REQUIRED     = 'Password is required';
    public const  INVALID_TOKEN         = 'This token is invalid.';

    public const CUSTOM_CODES = [

        self::NOT_FOUND         => Response::HTTP_NOT_FOUND,
        self::INVALID_TOKEN     => Response::HTTP_BAD_REQUEST,
        self::EMAIL_REQUIRED    => Response::HTTP_UNPROCESSABLE_ENTITY,  
        self::EMAIL_FORMAT      => Response::HTTP_UNPROCESSABLE_ENTITY,   
        self::PASSWORD_REQUIRED => Response::HTTP_UNPROCESSABLE_ENTITY,   

    ];
}