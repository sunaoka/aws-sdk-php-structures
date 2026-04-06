<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $fleetId
 * @property HostPropertiesResponse|null $hostProperties
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string|null $workerId
 */
class WorkerSearchSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     fleetId?: string|null,
     *     hostProperties?: HostPropertiesResponse|null,
     *     status?: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     workerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
