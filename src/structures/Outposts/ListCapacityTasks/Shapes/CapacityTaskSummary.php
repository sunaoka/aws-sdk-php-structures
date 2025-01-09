<?php

namespace Sunaoka\Aws\Structures\Outposts\ListCapacityTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityTaskId
 * @property string $OutpostId
 * @property string $OrderId
 * @property 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED' $CapacityTaskStatus
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class CapacityTaskSummary extends Shape
{
    /**
     * @param array{
     *     CapacityTaskId?: string,
     *     OutpostId?: string,
     *     OrderId?: string,
     *     CapacityTaskStatus?: 'REQUESTED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|'WAITING_FOR_EVACUATION'|'CANCELLATION_IN_PROGRESS'|'CANCELLED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
