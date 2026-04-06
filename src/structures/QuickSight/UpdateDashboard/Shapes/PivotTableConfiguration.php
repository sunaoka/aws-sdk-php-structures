<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PivotTableFieldWells|null $FieldWells
 * @property PivotTableSortConfiguration|null $SortConfiguration
 * @property PivotTableOptions|null $TableOptions
 * @property PivotTableTotalOptions|null $TotalOptions
 * @property PivotTableFieldOptions|null $FieldOptions
 * @property PivotTablePaginatedReportOptions|null $PaginatedReportOptions
 * @property VisualInteractionOptions|null $Interactions
 */
class PivotTableConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: PivotTableFieldWells|null,
     *     SortConfiguration?: PivotTableSortConfiguration|null,
     *     TableOptions?: PivotTableOptions|null,
     *     TotalOptions?: PivotTableTotalOptions|null,
     *     FieldOptions?: PivotTableFieldOptions|null,
     *     PaginatedReportOptions?: PivotTablePaginatedReportOptions|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
