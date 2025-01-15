<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWaitingWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepExecutionId
 * @property string|null $imageBuildVersionArn
 * @property string|null $workflowExecutionId
 * @property string|null $workflowBuildVersionArn
 * @property string|null $name
 * @property string|null $action
 * @property string|null $startTime
 */
class WorkflowStepExecution extends Shape
{
    /**
     * @param array{
     *     stepExecutionId?: string|null,
     *     imageBuildVersionArn?: string|null,
     *     workflowExecutionId?: string|null,
     *     workflowBuildVersionArn?: string|null,
     *     name?: string|null,
     *     action?: string|null,
     *     startTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
