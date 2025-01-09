<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourcePipelineExecutionArn
 */
class SelectiveExecutionResult extends Shape
{
    /**
     * @param array{SourcePipelineExecutionArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
