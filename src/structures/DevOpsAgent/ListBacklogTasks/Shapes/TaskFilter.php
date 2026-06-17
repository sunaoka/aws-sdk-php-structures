<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListBacklogTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property list<'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL'>|null $priority
 * @property list<'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|'SKIPPED'>|null $status
 * @property list<'INVESTIGATION'|'EVALUATION'|'RELEASE_READINESS_REVIEW'|'RELEASE_TESTING'>|null $taskType
 * @property string|null $primaryTaskId
 */
class TaskFilter extends Shape
{
    /**
     * @param array{
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     priority?: list<'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'MINIMAL'>|null,
     *     status?: list<'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|'SKIPPED'>|null,
     *     taskType?: list<'INVESTIGATION'|'EVALUATION'|'RELEASE_READINESS_REVIEW'|'RELEASE_TESTING'>|null,
     *     primaryTaskId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
