<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $VerticalOverflowVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $OverflowColumnHeaderVisibility
 */
class TablePaginatedReportOptions extends Shape
{
    /**
     * @param array{
     *     VerticalOverflowVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     OverflowColumnHeaderVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
