<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxParallelExecutionSteps
 */
class ParallelismConfiguration extends Shape
{
    /**
     * @param array{MaxParallelExecutionSteps: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
