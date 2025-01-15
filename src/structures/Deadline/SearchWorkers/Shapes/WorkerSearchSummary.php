<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fleetId
 * @property string|null $workerId
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE'|null $status
 * @property HostPropertiesResponse|null $hostProperties
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class WorkerSearchSummary extends Shape
{
    /**
     * @param array{
     *     fleetId?: string|null,
     *     workerId?: string|null,
     *     status?: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE'|null,
     *     hostProperties?: HostPropertiesResponse|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
