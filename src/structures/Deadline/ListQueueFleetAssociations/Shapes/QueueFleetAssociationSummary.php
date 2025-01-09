<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueFleetAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueId
 * @property string $fleetId
 * @property 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class QueueFleetAssociationSummary extends Shape
{
    /**
     * @param array{
     *     queueId: string,
     *     fleetId: string,
     *     status: 'ACTIVE'|'STOP_SCHEDULING_AND_COMPLETE_TASKS'|'STOP_SCHEDULING_AND_CANCEL_TASKS'|'STOPPED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
