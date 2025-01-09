<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<\Aws\Api\DateTimeResult> $StaticValues
 */
class DateTimeDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<\Aws\Api\DateTimeResult>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
