<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $auditTaskId
 * @property string|null $findingId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class ListAuditMitigationActionsTasksRequest extends Request
{
    /**
     * @param array{
     *     auditTaskId?: string|null,
     *     findingId?: string|null,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
