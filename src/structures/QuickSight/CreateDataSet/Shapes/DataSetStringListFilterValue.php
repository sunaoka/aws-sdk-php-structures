<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StaticValues
 */
class DataSetStringListFilterValue extends Shape
{
    /**
     * @param array{StaticValues?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
