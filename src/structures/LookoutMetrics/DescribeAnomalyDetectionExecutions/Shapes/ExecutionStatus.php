<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timestamp
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|null $Status
 * @property string|null $FailureReason
 */
class ExecutionStatus extends Shape
{
    /**
     * @param array{
     *     Timestamp?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
