<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TableFieldWells $FieldWells
 * @property TableSortConfiguration $SortConfiguration
 * @property TableOptions $TableOptions
 * @property TotalOptions $TotalOptions
 * @property TableFieldOptions $FieldOptions
 * @property TablePaginatedReportOptions $PaginatedReportOptions
 * @property list<TableInlineVisualization> $TableInlineVisualizations
 * @property VisualInteractionOptions $Interactions
 */
class TableConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: TableFieldWells,
     *     SortConfiguration?: TableSortConfiguration,
     *     TableOptions?: TableOptions,
     *     TotalOptions?: TotalOptions,
     *     FieldOptions?: TableFieldOptions,
     *     PaginatedReportOptions?: TablePaginatedReportOptions,
     *     TableInlineVisualizations?: list<TableInlineVisualization>,
     *     Interactions?: VisualInteractionOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
