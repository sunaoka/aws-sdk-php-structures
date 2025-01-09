<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingColor $BackgroundColor
 */
class ShapeConditionalFormat extends Shape
{
    /**
     * @param array{BackgroundColor: ConditionalFormattingColor} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
