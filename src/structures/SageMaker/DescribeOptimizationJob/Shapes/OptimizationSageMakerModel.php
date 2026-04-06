<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelName
 */
class OptimizationSageMakerModel extends Shape
{
    /**
     * @param array{ModelName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
