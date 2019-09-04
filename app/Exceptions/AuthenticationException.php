<?php

namespace App\Exceptions;

use Exception;
use App\Constants\ErrorConstants;

class AuthenticationException extends Exception
{
    public function __construct($message)
    {
        $this->message  = $message;
        $this->httpCode = ErrorConstants::CUSTOM_CODES[$this->message];
    }
    
    public function getCustomMessage()
    {
        return $this->message;
    }
    
    public function getErrorCode()
    {
        return $this->httpCode;
    }
}
