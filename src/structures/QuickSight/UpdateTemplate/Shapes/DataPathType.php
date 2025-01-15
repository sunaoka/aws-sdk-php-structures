<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIERARCHY_ROWS_LAYOUT_COLUMN'|'MULTIPLE_ROW_METRICS_COLUMN'|'EMPTY_COLUMN_HEADER'|'COUNT_METRIC_COLUMN'|null $PivotTableDataPathType
 */
class DataPathType extends Shape
{
    /**
     * @param array{PivotTableDataPathType?: 'HIERARCHY_ROWS_LAYOUT_COLUMN'|'MULTIPLE_ROW_METRICS_COLUMN'|'EMPTY_COLUMN_HEADER'|'COUNT_METRIC_COLUMN'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
