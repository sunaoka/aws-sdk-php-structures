<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilledMapShapeConditionalFormatting $Shape
 */
class FilledMapConditionalFormattingOption extends Shape
{
    /**
     * @param array{Shape: FilledMapShapeConditionalFormatting} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
