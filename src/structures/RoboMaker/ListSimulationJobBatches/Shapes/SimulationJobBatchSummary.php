<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationJobBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut' $status
 * @property int $failedRequestCount
 * @property int $pendingRequestCount
 * @property int $createdRequestCount
 */
class SimulationJobBatchSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     status?: 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut',
     *     failedRequestCount?: int,
     *     pendingRequestCount?: int,
     *     createdRequestCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
