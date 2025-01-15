<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $VerticalOverflowVisibility
 * @property 'HIDDEN'|'VISIBLE'|null $OverflowColumnHeaderVisibility
 */
class PivotTablePaginatedReportOptions extends Shape
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
