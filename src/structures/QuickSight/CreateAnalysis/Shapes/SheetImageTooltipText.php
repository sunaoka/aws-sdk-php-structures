<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlainText
 */
class SheetImageTooltipText extends Shape
{
    /**
     * @param array{PlainText?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
