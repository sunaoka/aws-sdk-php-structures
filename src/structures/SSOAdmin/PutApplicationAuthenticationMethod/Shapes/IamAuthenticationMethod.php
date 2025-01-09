<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutApplicationAuthenticationMethod\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActorPolicyDocument $ActorPolicy
 */
class IamAuthenticationMethod extends Shape
{
    /**
     * @param array{ActorPolicy: ActorPolicyDocument} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
