<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $StepCount
 * @property double|null $StepSize
 */
class AxisLinearScale extends Shape
{
    /**
     * @param array{
     *     StepCount?: int|null,
     *     StepSize?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
