<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldWells|null $FieldWells
 * @property TableSortConfiguration|null $SortConfiguration
 * @property TableOptions|null $TableOptions
 * @property TotalOptions|null $TotalOptions
 * @property TableFieldOptions|null $FieldOptions
 * @property TablePaginatedReportOptions|null $PaginatedReportOptions
 * @property list<TableInlineVisualization>|null $TableInlineVisualizations
 * @property VisualInteractionOptions|null $Interactions
 */
class TableConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: TableFieldWells|null,
     *     SortConfiguration?: TableSortConfiguration|null,
     *     TableOptions?: TableOptions|null,
     *     TotalOptions?: TotalOptions|null,
     *     FieldOptions?: TableFieldOptions|null,
     *     PaginatedReportOptions?: TablePaginatedReportOptions|null,
     *     TableInlineVisualizations?: list<TableInlineVisualization>|null,
     *     Interactions?: VisualInteractionOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
