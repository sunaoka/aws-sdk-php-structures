<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SageMakerPipelineParameter>|null $PipelineParameterList
 */
class PipeTargetSageMakerPipelineParameters extends Shape
{
    /**
     * @param array{PipelineParameterList?: list<SageMakerPipelineParameter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
