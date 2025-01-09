<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 */
class Entity extends Shape
{
    /**
     * @param array{Path?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
