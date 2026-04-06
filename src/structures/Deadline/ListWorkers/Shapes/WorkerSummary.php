<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $farmId
 * @property string $fleetId
 * @property HostPropertiesResponse|null $hostProperties
 * @property LogConfiguration|null $log
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $workerId
 */
class WorkerSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     farmId: string,
     *     fleetId: string,
     *     hostProperties?: HostPropertiesResponse|null,
     *     log?: LogConfiguration|null,
     *     status: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE',
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
