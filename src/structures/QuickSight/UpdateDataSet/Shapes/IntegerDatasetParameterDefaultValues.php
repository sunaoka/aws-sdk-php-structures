<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $StaticValues
 */
class IntegerDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<int>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
