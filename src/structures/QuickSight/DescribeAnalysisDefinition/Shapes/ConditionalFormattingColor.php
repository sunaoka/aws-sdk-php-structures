<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingSolidColor|null $Solid
 * @property ConditionalFormattingGradientColor|null $Gradient
 */
class ConditionalFormattingColor extends Shape
{
    /**
     * @param array{
     *     Solid?: ConditionalFormattingSolidColor|null,
     *     Gradient?: ConditionalFormattingGradientColor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
