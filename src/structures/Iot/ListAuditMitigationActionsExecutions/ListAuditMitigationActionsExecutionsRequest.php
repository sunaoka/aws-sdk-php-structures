<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING' $actionStatus
 * @property string $findingId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAuditMitigationActionsExecutionsRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     actionStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING',
     *     findingId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
