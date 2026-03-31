<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateBacklogTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $taskId
 * @property 'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|null $taskStatus
 * @property string|null $clientToken
 */
class UpdateBacklogTaskRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     taskId: string,
     *     taskStatus?: 'PENDING_TRIAGE'|'LINKED'|'PENDING_START'|'IN_PROGRESS'|'PENDING_CUSTOMER_APPROVAL'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
