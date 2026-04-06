<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SheetImageTooltipText|null $TooltipText
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 */
class SheetImageTooltipConfiguration extends Shape
{
    /**
     * @param array{
     *     TooltipText?: SheetImageTooltipText|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
