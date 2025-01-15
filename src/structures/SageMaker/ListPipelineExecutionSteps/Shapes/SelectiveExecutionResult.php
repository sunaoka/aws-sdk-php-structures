<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourcePipelineExecutionArn
 */
class SelectiveExecutionResult extends Shape
{
    /**
     * @param array{SourcePipelineExecutionArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
