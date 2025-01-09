<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $AggregationVisibility
 * @property 'NONE'|'PRIMARY_VALUE' $TooltipTitleType
 * @property list<TooltipItem> $TooltipFields
 */
class FieldBasedTooltip extends Shape
{
    /**
     * @param array{
     *     AggregationVisibility?: 'HIDDEN'|'VISIBLE',
     *     TooltipTitleType?: 'NONE'|'PRIMARY_VALUE',
     *     TooltipFields?: list<TooltipItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
