<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWaitingWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepExecutionId
 * @property string $imageBuildVersionArn
 * @property string $workflowExecutionId
 * @property string $workflowBuildVersionArn
 * @property string $name
 * @property string $action
 * @property string $startTime
 */
class WorkflowStepExecution extends Shape
{
    /**
     * @param array{
     *     stepExecutionId?: string,
     *     imageBuildVersionArn?: string,
     *     workflowExecutionId?: string,
     *     workflowBuildVersionArn?: string,
     *     name?: string,
     *     action?: string,
     *     startTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
