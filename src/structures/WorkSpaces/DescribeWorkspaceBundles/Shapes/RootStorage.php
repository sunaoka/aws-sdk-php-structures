<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Capacity
 */
class RootStorage extends Shape
{
    /**
     * @param array{Capacity?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
