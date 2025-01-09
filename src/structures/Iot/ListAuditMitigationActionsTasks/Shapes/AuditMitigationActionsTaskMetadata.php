<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 */
class AuditMitigationActionsTaskMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
