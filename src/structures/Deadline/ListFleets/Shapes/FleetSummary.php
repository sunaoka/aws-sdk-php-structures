<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fleetId
 * @property string $farmId
 * @property string $displayName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property 'GROWING'|'STEADY'|'SHRINKING'|null $autoScalingStatus
 * @property int|null $targetWorkerCount
 * @property int $workerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property int<0, 2147483647> $maxWorkerCount
 * @property FleetConfiguration $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class FleetSummary extends Shape
{
    /**
     * @param array{
     *     fleetId: string,
     *     farmId: string,
     *     displayName: string,
     *     status: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     autoScalingStatus?: 'GROWING'|'STEADY'|'SHRINKING'|null,
     *     targetWorkerCount?: int|null,
     *     workerCount: int,
     *     minWorkerCount: int<0, 2147483647>,
     *     maxWorkerCount: int<0, 2147483647>,
     *     configuration: FleetConfiguration,
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
