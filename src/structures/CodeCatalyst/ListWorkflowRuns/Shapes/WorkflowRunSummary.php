<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $workflowId
 * @property string $workflowName
 * @property 'SUCCEEDED'|'FAILED'|'STOPPED'|'SUPERSEDED'|'CANCELLED'|'NOT_RUN'|'VALIDATING'|'PROVISIONING'|'IN_PROGRESS'|'STOPPING'|'ABANDONED' $status
 * @property list<WorkflowRunStatusReason> $statusReasons
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 */
class WorkflowRunSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     workflowId: string,
     *     workflowName: string,
     *     status: 'SUCCEEDED'|'FAILED'|'STOPPED'|'SUPERSEDED'|'CANCELLED'|'NOT_RUN'|'VALIDATING'|'PROVISIONING'|'IN_PROGRESS'|'STOPPING'|'ABANDONED',
     *     statusReasons?: list<WorkflowRunStatusReason>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
