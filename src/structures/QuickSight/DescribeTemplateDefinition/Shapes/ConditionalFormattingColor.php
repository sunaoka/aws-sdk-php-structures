<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionalFormattingSolidColor $Solid
 * @property ConditionalFormattingGradientColor $Gradient
 */
class ConditionalFormattingColor extends Shape
{
    /**
     * @param array{
     *     Solid?: ConditionalFormattingSolidColor,
     *     Gradient?: ConditionalFormattingGradientColor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
