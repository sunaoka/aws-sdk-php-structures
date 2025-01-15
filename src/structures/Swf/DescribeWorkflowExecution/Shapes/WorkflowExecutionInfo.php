<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkflowExecution $execution
 * @property WorkflowType $workflowType
 * @property \Aws\Api\DateTimeResult $startTimestamp
 * @property \Aws\Api\DateTimeResult|null $closeTimestamp
 * @property 'OPEN'|'CLOSED' $executionStatus
 * @property 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT'|null $closeStatus
 * @property WorkflowExecution|null $parent
 * @property list<string>|null $tagList
 * @property bool|null $cancelRequested
 */
class WorkflowExecutionInfo extends Shape
{
    /**
     * @param array{
     *     execution: WorkflowExecution,
     *     workflowType: WorkflowType,
     *     startTimestamp: \Aws\Api\DateTimeResult,
     *     closeTimestamp?: \Aws\Api\DateTimeResult|null,
     *     executionStatus: 'OPEN'|'CLOSED',
     *     closeStatus?: 'COMPLETED'|'FAILED'|'CANCELED'|'TERMINATED'|'CONTINUED_AS_NEW'|'TIMED_OUT'|null,
     *     parent?: WorkflowExecution|null,
     *     tagList?: list<string>|null,
     *     cancelRequested?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
