<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourcePipelineExecutionArn
 * @property list<SelectedStep> $SelectedSteps
 */
class SelectiveExecutionConfig extends Shape
{
    /**
     * @param array{
     *     SourcePipelineExecutionArn?: string|null,
     *     SelectedSteps: list<SelectedStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
