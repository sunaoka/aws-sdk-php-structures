<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double>|null $StaticValues
 */
class DecimalDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<double>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
