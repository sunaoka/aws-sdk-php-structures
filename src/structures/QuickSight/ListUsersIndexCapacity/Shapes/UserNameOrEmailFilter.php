<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUsersIndexCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $prefix
 */
class UserNameOrEmailFilter extends Shape
{
    /**
     * @param array{prefix: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
