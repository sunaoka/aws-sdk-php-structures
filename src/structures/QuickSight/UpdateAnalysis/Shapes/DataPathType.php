<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIERARCHY_ROWS_LAYOUT_COLUMN'|'MULTIPLE_ROW_METRICS_COLUMN'|'EMPTY_COLUMN_HEADER'|'COUNT_METRIC_COLUMN' $PivotTableDataPathType
 */
class DataPathType extends Shape
{
    /**
     * @param array{PivotTableDataPathType?: 'HIERARCHY_ROWS_LAYOUT_COLUMN'|'MULTIPLE_ROW_METRICS_COLUMN'|'EMPTY_COLUMN_HEADER'|'COUNT_METRIC_COLUMN'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
