<?php

namespace Sunaoka\Aws\Structures\Emr\GetClusterSessionCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UsernamePassword $UsernamePassword
 */
class Credentials extends Shape
{
    /**
     * @param array{UsernamePassword?: UsernamePassword} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
