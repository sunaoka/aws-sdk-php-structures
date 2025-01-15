<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workerId
 * @property string $farmId
 * @property string $fleetId
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property HostPropertiesResponse|null $hostProperties
 * @property LogConfiguration|null $log
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class WorkerSummary extends Shape
{
    /**
     * @param array{
     *     workerId: string,
     *     farmId: string,
     *     fleetId: string,
     *     status: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE',
     *     hostProperties?: HostPropertiesResponse|null,
     *     log?: LogConfiguration|null,
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
