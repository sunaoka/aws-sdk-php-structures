<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'True'|'False'|null $Outcome
 */
class ConditionStepMetadata extends Shape
{
    /**
     * @param array{Outcome?: 'True'|'False'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
