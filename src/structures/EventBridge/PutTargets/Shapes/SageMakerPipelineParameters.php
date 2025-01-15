<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SageMakerPipelineParameter>|null $PipelineParameterList
 */
class SageMakerPipelineParameters extends Shape
{
    /**
     * @param array{PipelineParameterList?: list<SageMakerPipelineParameter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
