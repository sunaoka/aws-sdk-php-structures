<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userArn
 */
class UserUnion extends Shape
{
    /**
     * @param array{userArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
