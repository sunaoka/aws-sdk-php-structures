<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldSortOptions>|null $CategorySort
 * @property ItemsLimitConfiguration|null $BreakdownItemsLimit
 */
class WaterfallChartSortConfiguration extends Shape
{
    /**
     * @param array{
     *     CategorySort?: list<FieldSortOptions>|null,
     *     BreakdownItemsLimit?: ItemsLimitConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
