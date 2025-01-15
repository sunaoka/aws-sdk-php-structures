<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TooltipVisibility
 * @property 'BASIC'|'DETAILED'|null $SelectedTooltipType
 * @property FieldBasedTooltip|null $FieldBasedTooltip
 */
class TooltipOptions extends Shape
{
    /**
     * @param array{
     *     TooltipVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     SelectedTooltipType?: 'BASIC'|'DETAILED'|null,
     *     FieldBasedTooltip?: FieldBasedTooltip|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
