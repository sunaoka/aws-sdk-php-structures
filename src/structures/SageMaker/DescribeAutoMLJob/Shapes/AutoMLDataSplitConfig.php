<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $ValidationFraction
 */
class AutoMLDataSplitConfig extends Shape
{
    /**
     * @param array{ValidationFraction?: float} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
