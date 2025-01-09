<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $VerticalOverflowVisibility
 * @property 'HIDDEN'|'VISIBLE' $OverflowColumnHeaderVisibility
 */
class TablePaginatedReportOptions extends Shape
{
    /**
     * @param array{
     *     VerticalOverflowVisibility?: 'HIDDEN'|'VISIBLE',
     *     OverflowColumnHeaderVisibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
