<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fleetId
 * @property string $workerId
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property HostPropertiesResponse $hostProperties
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $updatedBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class WorkerSearchSummary extends Shape
{
    /**
     * @param array{
     *     fleetId?: string,
     *     workerId?: string,
     *     status?: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE',
     *     hostProperties?: HostPropertiesResponse,
     *     createdBy?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
