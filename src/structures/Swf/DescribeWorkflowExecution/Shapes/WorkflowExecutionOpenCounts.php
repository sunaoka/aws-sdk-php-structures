<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $openActivityTasks
 * @property int<0, 1> $openDecisionTasks
 * @property int<0, max> $openTimers
 * @property int<0, max> $openChildWorkflowExecutions
 * @property int<0, max> $openLambdaFunctions
 */
class WorkflowExecutionOpenCounts extends Shape
{
    /**
     * @param array{
     *     openActivityTasks: int<0, max>,
     *     openDecisionTasks: int<0, 1>,
     *     openTimers: int<0, max>,
     *     openChildWorkflowExecutions: int<0, max>,
     *     openLambdaFunctions?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
