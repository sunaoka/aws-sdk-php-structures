<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null $taskStatus
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'|null $taskType
 */
class AuditTaskMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED'|null,
     *     taskType?: 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
