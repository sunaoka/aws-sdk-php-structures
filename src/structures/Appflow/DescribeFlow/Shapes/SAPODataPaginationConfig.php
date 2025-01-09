<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $maxPageSize
 */
class SAPODataPaginationConfig extends Shape
{
    /**
     * @param array{maxPageSize: int<1, 10000>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
