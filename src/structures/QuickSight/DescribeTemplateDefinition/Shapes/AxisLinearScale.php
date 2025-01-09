<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StepCount
 * @property double $StepSize
 */
class AxisLinearScale extends Shape
{
    /**
     * @param array{
     *     StepCount?: int,
     *     StepSize?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
