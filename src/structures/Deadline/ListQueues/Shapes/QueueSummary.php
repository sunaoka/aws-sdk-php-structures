<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null $blockedReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS' $defaultBudgetAction
 * @property string $displayName
 * @property string $farmId
 * @property string $queueId
 * @property 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class QueueSummary extends Shape
{
    /**
     * @param array{
     *     blockedReason?: 'NO_BUDGET_CONFIGURED'|'BUDGET_THRESHOLD_REACHED'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     defaultBudgetAction: 'NONE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS',
     *     displayName: string,
     *     farmId: string,
     *     queueId: string,
     *     status: 'IDLE'|'SCHEDULING'|'SCHEDULING_BLOCKED',
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
