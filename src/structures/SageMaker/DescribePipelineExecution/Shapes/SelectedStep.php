<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepName
 */
class SelectedStep extends Shape
{
    /**
     * @param array{StepName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
