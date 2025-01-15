<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GradientStop>|null $Stops
 */
class GradientColor extends Shape
{
    /**
     * @param array{Stops?: list<GradientStop>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
