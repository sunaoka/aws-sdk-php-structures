<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<\Aws\Api\DateTimeResult>|null $StaticValues
 */
class DateTimeDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<\Aws\Api\DateTimeResult>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
