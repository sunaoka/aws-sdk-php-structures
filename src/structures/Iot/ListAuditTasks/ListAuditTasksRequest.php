<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'|null $taskType
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListAuditTasksRequest extends Request
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     taskType?: 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'|null,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
