<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 */
class BinCountOptions extends Shape
{
    /**
     * @param array{Value?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
