<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxPageSize
 */
class SAPODataPaginationConfig extends Shape
{
    /**
     * @param array{maxPageSize: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
