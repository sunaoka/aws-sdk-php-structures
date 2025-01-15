<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubtotalOptions|null $RowSubtotalOptions
 * @property SubtotalOptions|null $ColumnSubtotalOptions
 * @property PivotTotalOptions|null $RowTotalOptions
 * @property PivotTotalOptions|null $ColumnTotalOptions
 */
class PivotTableTotalOptions extends Shape
{
    /**
     * @param array{
     *     RowSubtotalOptions?: SubtotalOptions|null,
     *     ColumnSubtotalOptions?: SubtotalOptions|null,
     *     RowTotalOptions?: PivotTotalOptions|null,
     *     ColumnTotalOptions?: PivotTotalOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
