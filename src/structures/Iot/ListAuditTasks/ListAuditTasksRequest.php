<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK' $taskType
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAuditTasksRequest extends Request
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     taskType?: 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK',
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
