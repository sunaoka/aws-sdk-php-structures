<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListOtaTaskExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ExecutionNumber
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $QueuedAt
 * @property int|null $RetryAttempt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $Status
 */
class OtaTaskExecutionSummary extends Shape
{
    /**
     * @param array{
     *     ExecutionNumber?: int|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     QueuedAt?: \Aws\Api\DateTimeResult|null,
     *     RetryAttempt?: int|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
