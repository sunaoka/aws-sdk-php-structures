<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationAuthenticationMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamAuthenticationMethod|null $Iam
 */
class AuthenticationMethod extends Shape
{
    /**
     * @param array{Iam?: IamAuthenticationMethod|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
