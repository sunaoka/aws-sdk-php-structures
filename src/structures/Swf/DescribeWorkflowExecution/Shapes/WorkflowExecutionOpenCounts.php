<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $openActivityTasks
 * @property int $openDecisionTasks
 * @property int $openTimers
 * @property int $openChildWorkflowExecutions
 * @property int $openLambdaFunctions
 */
class WorkflowExecutionOpenCounts extends Shape
{
    /**
     * @param array{
     *     openActivityTasks: int,
     *     openDecisionTasks: int,
     *     openTimers: int,
     *     openChildWorkflowExecutions: int,
     *     openLambdaFunctions?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
