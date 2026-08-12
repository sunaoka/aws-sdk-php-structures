<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userName
 * @property string $namespace
 */
class UserLimitsEntry extends Shape
{
    /**
     * @param array{
     *     userName: string,
     *     namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
