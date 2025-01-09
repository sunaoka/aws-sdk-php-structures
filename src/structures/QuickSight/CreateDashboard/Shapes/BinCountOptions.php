<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Value
 */
class BinCountOptions extends Shape
{
    /**
     * @param array{Value?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
