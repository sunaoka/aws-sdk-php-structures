<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisLinearScale $Linear
 * @property AxisLogarithmicScale $Logarithmic
 */
class AxisScale extends Shape
{
    /**
     * @param array{
     *     Linear?: AxisLinearScale,
     *     Logarithmic?: AxisLogarithmicScale
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
