<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StaticValues
 */
class StringDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
