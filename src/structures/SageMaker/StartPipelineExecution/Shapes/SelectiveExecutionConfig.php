<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourcePipelineExecutionArn
 * @property list<SelectedStep> $SelectedSteps
 */
class SelectiveExecutionConfig extends Shape
{
    /**
     * @param array{
     *     SourcePipelineExecutionArn?: string,
     *     SelectedSteps: list<SelectedStep>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
