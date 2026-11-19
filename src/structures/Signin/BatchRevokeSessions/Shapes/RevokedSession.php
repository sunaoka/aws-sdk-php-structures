<?php

namespace Sunaoka\Aws\Structures\Signin\BatchRevokeSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionArn
 */
class RevokedSession extends Shape
{
    /**
     * @param array{sessionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
