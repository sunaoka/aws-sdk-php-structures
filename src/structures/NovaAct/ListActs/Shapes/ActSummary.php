<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListActs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workflowRunId
 * @property string $sessionId
 * @property string $actId
 * @property 'RUNNING'|'PENDING_CLIENT_ACTION'|'PENDING_HUMAN_ACTION'|'SUCCEEDED'|'FAILED'|'TIMED_OUT' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property TraceLocation|null $traceLocation
 */
class ActSummary extends Shape
{
    /**
     * @param array{
     *     workflowRunId: string,
     *     sessionId: string,
     *     actId: string,
     *     status: 'RUNNING'|'PENDING_CLIENT_ACTION'|'PENDING_HUMAN_ACTION'|'SUCCEEDED'|'FAILED'|'TIMED_OUT',
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
