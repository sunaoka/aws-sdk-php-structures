<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $MaxParallelExecutionSteps
 */
class ParallelismConfiguration extends Shape
{
    /**
     * @param array{MaxParallelExecutionSteps: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
