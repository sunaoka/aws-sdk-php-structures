<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $TooltipVisibility
 * @property 'BASIC'|'DETAILED' $SelectedTooltipType
 * @property FieldBasedTooltip $FieldBasedTooltip
 */
class TooltipOptions extends Shape
{
    /**
     * @param array{
     *     TooltipVisibility?: 'HIDDEN'|'VISIBLE',
     *     SelectedTooltipType?: 'BASIC'|'DETAILED',
     *     FieldBasedTooltip?: FieldBasedTooltip
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
