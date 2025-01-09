<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'True'|'False' $Outcome
 */
class ConditionStepMetadata extends Shape
{
    /**
     * @param array{Outcome?: 'True'|'False'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
