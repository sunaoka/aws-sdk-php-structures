<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParentStepName
 * @property int|null $Index
 * @property string|null $Item
 */
class IterationContext extends Shape
{
    /**
     * @param array{
     *     ParentStepName?: string|null,
     *     Index?: int|null,
     *     Item?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
