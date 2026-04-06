<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10> $maxParallelism
 */
class SAPODataParallelismConfig extends Shape
{
    /**
     * @param array{maxParallelism: int<1, 10>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
