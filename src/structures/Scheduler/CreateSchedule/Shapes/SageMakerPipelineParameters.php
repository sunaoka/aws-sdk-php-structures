<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SageMakerPipelineParameter> $PipelineParameterList
 */
class SageMakerPipelineParameters extends Shape
{
    /**
     * @param array{PipelineParameterList?: list<SageMakerPipelineParameter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
