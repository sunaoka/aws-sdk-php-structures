<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubtotalOptions $RowSubtotalOptions
 * @property SubtotalOptions $ColumnSubtotalOptions
 * @property PivotTotalOptions $RowTotalOptions
 * @property PivotTotalOptions $ColumnTotalOptions
 */
class PivotTableTotalOptions extends Shape
{
    /**
     * @param array{
     *     RowSubtotalOptions?: SubtotalOptions,
     *     ColumnSubtotalOptions?: SubtotalOptions,
     *     RowTotalOptions?: PivotTotalOptions,
     *     ColumnTotalOptions?: PivotTotalOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
