<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SheetImageTooltipText $TooltipText
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 */
class SheetImageTooltipConfiguration extends Shape
{
    /**
     * @param array{
     *     TooltipText?: SheetImageTooltipText,
     *     Visibility?: 'HIDDEN'|'VISIBLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
