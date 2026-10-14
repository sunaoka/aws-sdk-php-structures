<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepName
 * @property int|null $Index
 */
class ForEachSelectorResult extends Shape
{
    /**
     * @param array{
     *     StepName?: string|null,
     *     Index?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
