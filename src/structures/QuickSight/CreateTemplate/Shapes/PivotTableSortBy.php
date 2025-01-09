<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSort $Field
 * @property ColumnSort $Column
 * @property DataPathSort $DataPath
 */
class PivotTableSortBy extends Shape
{
    /**
     * @param array{
     *     Field?: FieldSort,
     *     Column?: ColumnSort,
     *     DataPath?: DataPathSort
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
