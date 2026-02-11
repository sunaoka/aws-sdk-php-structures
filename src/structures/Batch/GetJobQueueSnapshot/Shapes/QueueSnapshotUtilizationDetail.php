<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueueSnapshotCapacityUsage>|null $totalCapacityUsage
 * @property FairshareUtilizationDetail|null $fairshareUtilization
 * @property int|null $lastUpdatedAt
 */
class QueueSnapshotUtilizationDetail extends Shape
{
    /**
     * @param array{
     *     totalCapacityUsage?: list<QueueSnapshotCapacityUsage>|null,
     *     fairshareUtilization?: FairshareUtilizationDetail|null,
     *     lastUpdatedAt?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
