<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $StaticValues
 */
class IntegerDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<int>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
