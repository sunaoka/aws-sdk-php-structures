<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GradientStop> $Stops
 */
class GradientColor extends Shape
{
    /**
     * @param array{Stops?: list<GradientStop>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
