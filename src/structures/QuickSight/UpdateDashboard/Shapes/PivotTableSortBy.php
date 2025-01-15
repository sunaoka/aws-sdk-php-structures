<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldSort|null $Field
 * @property ColumnSort|null $Column
 * @property DataPathSort|null $DataPath
 */
class PivotTableSortBy extends Shape
{
    /**
     * @param array{
     *     Field?: FieldSort|null,
     *     Column?: ColumnSort|null,
     *     DataPath?: DataPathSort|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
