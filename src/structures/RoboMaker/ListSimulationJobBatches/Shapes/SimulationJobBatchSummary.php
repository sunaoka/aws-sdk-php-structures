<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationJobBatches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut'|null $status
 * @property int|null $failedRequestCount
 * @property int|null $pendingRequestCount
 * @property int|null $createdRequestCount
 */
class SimulationJobBatchSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'Pending'|'InProgress'|'Failed'|'Completed'|'Canceled'|'Canceling'|'Completing'|'TimingOut'|'TimedOut'|null,
     *     failedRequestCount?: int|null,
     *     pendingRequestCount?: int|null,
     *     createdRequestCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
