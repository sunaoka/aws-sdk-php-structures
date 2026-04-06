<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GROWING'|'STEADY'|'SHRINKING'|null $autoScalingStatus
 * @property FleetConfiguration $configuration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $displayName
 * @property string $farmId
 * @property string $fleetId
 * @property int<0, 2147483647> $maxWorkerCount
 * @property int<0, 2147483647> $minWorkerCount
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property int|null $targetWorkerCount
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property int $workerCount
 */
class FleetSummary extends Shape
{
    /**
     * @param array{
     *     autoScalingStatus?: 'GROWING'|'STEADY'|'SHRINKING'|null,
     *     configuration: FleetConfiguration,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     displayName: string,
     *     farmId: string,
     *     fleetId: string,
     *     maxWorkerCount: int<0, 2147483647>,
     *     minWorkerCount: int<0, 2147483647>,
     *     status: 'ACTIVE'|'CREATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_FAILED',
     *     targetWorkerCount?: int|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     workerCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
