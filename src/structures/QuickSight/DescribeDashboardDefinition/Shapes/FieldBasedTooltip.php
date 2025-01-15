<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $AggregationVisibility
 * @property 'NONE'|'PRIMARY_VALUE'|null $TooltipTitleType
 * @property list<TooltipItem>|null $TooltipFields
 */
class FieldBasedTooltip extends Shape
{
    /**
     * @param array{
     *     AggregationVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     TooltipTitleType?: 'NONE'|'PRIMARY_VALUE'|null,
     *     TooltipFields?: list<TooltipItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
