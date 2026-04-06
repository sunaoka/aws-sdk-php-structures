<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $sessionId
 * @property string $fleetId
 * @property string $workerId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'ENDED'|null $targetLifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property LogConfiguration $log
 * @property HostPropertiesResponse|null $hostProperties
 * @property LogConfiguration|null $workerLog
 */
class BatchGetSessionItem extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     sessionId: string,
     *     fleetId: string,
     *     workerId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     lifecycleStatus: 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED',
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     targetLifecycleStatus?: 'ENDED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     log: LogConfiguration,
     *     hostProperties?: HostPropertiesResponse|null,
     *     workerLog?: LogConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
