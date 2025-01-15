<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AxisLinearScale|null $Linear
 * @property AxisLogarithmicScale|null $Logarithmic
 */
class AxisScale extends Shape
{
    /**
     * @param array{
     *     Linear?: AxisLinearScale|null,
     *     Logarithmic?: AxisLogarithmicScale|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
