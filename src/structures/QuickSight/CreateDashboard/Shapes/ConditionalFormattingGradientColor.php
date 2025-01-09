<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property GradientColor $Color
 */
class ConditionalFormattingGradientColor extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     Color: GradientColor
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
