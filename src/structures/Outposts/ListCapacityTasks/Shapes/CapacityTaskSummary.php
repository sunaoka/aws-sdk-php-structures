<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCapacityTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityTaskId
 * @property string|null $OutpostId
 * @property string|null $OrderId
 * @property 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'CANCELLED'|null $CapacityTaskStatus
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class CapacityTaskSummary extends Shape
{
    /**
     * @param array{
     *     CapacityTaskId?: string|null,
     *     OutpostId?: string|null,
     *     OrderId?: string|null,
     *     CapacityTaskStatus?: 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'CANCELLED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
