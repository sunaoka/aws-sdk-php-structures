<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditMitigationActionsTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 */
class AuditMitigationActionsTaskMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
