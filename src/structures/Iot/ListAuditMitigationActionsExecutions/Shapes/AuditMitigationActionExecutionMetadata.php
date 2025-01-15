<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string|null $findingId
 * @property string|null $actionName
 * @property string|null $actionId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING'|null $status
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string|null $errorCode
 * @property string|null $message
 */
class AuditMitigationActionExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     findingId?: string|null,
     *     actionName?: string|null,
     *     actionId?: string|null,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     errorCode?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
