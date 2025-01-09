<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableFieldWells $FieldWells
 * @property PivotTableSortConfiguration $SortConfiguration
 * @property PivotTableOptions $TableOptions
 * @property PivotTableTotalOptions $TotalOptions
 * @property PivotTableFieldOptions $FieldOptions
 * @property PivotTablePaginatedReportOptions $PaginatedReportOptions
 * @property VisualInteractionOptions $Interactions
 */
class PivotTableConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: PivotTableFieldWells,
     *     SortConfiguration?: PivotTableSortConfiguration,
     *     TableOptions?: PivotTableOptions,
     *     TotalOptions?: PivotTableTotalOptions,
     *     FieldOptions?: PivotTableFieldOptions,
     *     PaginatedReportOptions?: PivotTablePaginatedReportOptions,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
