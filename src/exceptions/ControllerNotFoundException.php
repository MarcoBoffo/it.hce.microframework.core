<?php

namespace it\hce\microframework\core\exceptions;


use Exception;

class ControllerNotFoundException extends Exception
{

    public function __toString()
    {
        return $this->message;
    }
}