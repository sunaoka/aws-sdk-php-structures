<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING'|null $actionStatus
 * @property string $findingId
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListAuditMitigationActionsExecutionsRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     actionStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING'|null,
     *     findingId: string,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
