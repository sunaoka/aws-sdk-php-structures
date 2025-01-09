<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fleetId
 * @property string $farmId
 * @property string $displayName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property 'GROWING'|'STEADY'|'SHRINKING' $autoScalingStatus
 * @property int $targetWorkerCount
 * @property int $workerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property FleetConfiguration $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class FleetSummary extends Shape
{
    /**
     * @param array{
     *     fleetId: string,
     *     farmId: string,
     *     displayName: string,
     *     status: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     autoScalingStatus?: 'GROWING'|'STEADY'|'SHRINKING',
     *     targetWorkerCount?: int,
     *     workerCount: int,
     *     minWorkerCount: int<0, 2147483647>,
     *     maxWorkerCount: int<0, 2147483647>,
     *     configuration: FleetConfiguration,
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
