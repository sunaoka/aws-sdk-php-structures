<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SageMakerPipelineParameter> $PipelineParameterList
 */
class PipeTargetSageMakerPipelineParameters extends Shape
{
    /**
     * @param array{PipelineParameterList?: list<SageMakerPipelineParameter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
