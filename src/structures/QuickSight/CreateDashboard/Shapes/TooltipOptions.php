<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $TooltipVisibility
 * @property 'BASIC'|'DETAILED'|'SHEET'|null $SelectedTooltipType
 * @property FieldBasedTooltip|null $FieldBasedTooltip
 * @property SheetTooltip|null $SheetTooltip
 */
class TooltipOptions extends Shape
{
    /**
     * @param array{
     *     TooltipVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     SelectedTooltipType?: 'BASIC'|'DETAILED'|'SHEET'|null,
     *     FieldBasedTooltip?: FieldBasedTooltip|null,
     *     SheetTooltip?: SheetTooltip|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
