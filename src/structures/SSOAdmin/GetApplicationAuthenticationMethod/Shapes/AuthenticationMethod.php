<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAuthenticationMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamAuthenticationMethod $Iam
 */
class AuthenticationMethod extends Shape
{
    /**
     * @param array{Iam?: IamAuthenticationMethod} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
