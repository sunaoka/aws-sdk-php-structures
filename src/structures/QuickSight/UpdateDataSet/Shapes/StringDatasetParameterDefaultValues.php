<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StaticValues
 */
class StringDatasetParameterDefaultValues extends Shape
{
    /**
     * @param array{StaticValues?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
