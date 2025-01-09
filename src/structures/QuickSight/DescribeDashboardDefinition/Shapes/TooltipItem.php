<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldTooltipItem $FieldTooltipItem
 * @property ColumnTooltipItem $ColumnTooltipItem
 */
class TooltipItem extends Shape
{
    /**
     * @param array{
     *     FieldTooltipItem?: FieldTooltipItem,
     *     ColumnTooltipItem?: ColumnTooltipItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
