<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorMessage
 */
class FailStepMetadata extends Shape
{
    /**
     * @param array{ErrorMessage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
