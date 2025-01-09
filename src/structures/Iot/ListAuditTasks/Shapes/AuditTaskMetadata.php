<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $taskStatus
 * @property 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK' $taskType
 */
class AuditTaskMetadata extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     taskStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED',
     *     taskType?: 'ON_DEMAND_AUDIT_TASK'|'SCHEDULED_AUDIT_TASK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
