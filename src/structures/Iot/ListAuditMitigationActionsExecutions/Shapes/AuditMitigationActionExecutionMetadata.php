<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $findingId
 * @property string $actionName
 * @property string $actionId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING' $status
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $errorCode
 * @property string $message
 */
class AuditMitigationActionExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     findingId?: string,
     *     actionName?: string,
     *     actionId?: string,
     *     status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|'SKIPPED'|'PENDING',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     errorCode?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
