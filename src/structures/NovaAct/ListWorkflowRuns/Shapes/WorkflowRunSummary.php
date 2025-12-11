<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowRunArn
 * @property string $workflowRunId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property TraceLocation|null $traceLocation
 */
class WorkflowRunSummary extends Shape
{
    /**
     * @param array{
     *     workflowRunArn: string,
     *     workflowRunId: string,
     *     status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING',
     *     startedAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     traceLocation?: TraceLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
