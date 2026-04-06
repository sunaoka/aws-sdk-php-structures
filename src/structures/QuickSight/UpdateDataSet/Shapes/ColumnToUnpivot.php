<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ColumnName
 * @property string|null $NewValue
 */
class ColumnToUnpivot extends Shape
{
    /**
     * @param array{
     *     ColumnName?: string|null,
     *     NewValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
