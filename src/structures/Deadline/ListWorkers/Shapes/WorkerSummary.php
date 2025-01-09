<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workerId
 * @property string $farmId
 * @property string $fleetId
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property HostPropertiesResponse $hostProperties
 * @property LogConfiguration $log
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class WorkerSummary extends Shape
{
    /**
     * @param array{
     *     workerId: string,
     *     farmId: string,
     *     fleetId: string,
     *     status: 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE',
     *     hostProperties?: HostPropertiesResponse,
     *     log?: LogConfiguration,
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
