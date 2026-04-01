<?php

namespace Sunaoka\Aws\Structures\Deadline\ListQueueLimitAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueId
 * @property string $limitId
 * @property 'ACTIVE'|'STOP_LIMIT_USAGE_AND_COMPLETE_TASKS'|'STOP_LIMIT_USAGE_AND_CANCEL_TASKS'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class QueueLimitAssociationSummary extends Shape
{
    /**
     * @param array{
     *     queueId: string,
     *     limitId: string,
     *     status: 'ACTIVE'|'STOP_LIMIT_USAGE_AND_COMPLETE_TASKS'|'STOP_LIMIT_USAGE_AND_CANCEL_TASKS'|'STOPPED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
