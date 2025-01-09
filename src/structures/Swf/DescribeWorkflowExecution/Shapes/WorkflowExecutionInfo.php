<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $execution
 * @property WorkflowType $workflowType
 * @property \Aws\Api\DateTimeResult $startTimestamp
 * @property \Aws\Api\DateTimeResult $closeTimestamp
 * @property 'OPEN'|'CLOSED' $executionStatus
 * @property 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT' $closeStatus
 * @property WorkflowExecution $parent
 * @property list<string> $tagList
 * @property bool $cancelRequested
 */
class WorkflowExecutionInfo extends Shape
{
    /**
     * @param array{
     *     execution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     startTimestamp: \Aws\Api\DateTimeResult,
     *     closeTimestamp?: \Aws\Api\DateTimeResult,
     *     executionStatus: 'OPEN'|'CLOSED',
     *     closeStatus?: 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT',
     *     parent?: WorkflowExecution,
     *     tagList?: list<string>,
     *     cancelRequested?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
