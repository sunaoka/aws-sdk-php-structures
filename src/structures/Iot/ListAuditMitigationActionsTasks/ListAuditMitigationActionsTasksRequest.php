<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $auditTaskId
 * @property string $findingId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class ListAuditMitigationActionsTasksRequest extends Request
{
    /**
     * @param array{
     *     auditTaskId?: string,
     *     findingId?: string,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED',
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
