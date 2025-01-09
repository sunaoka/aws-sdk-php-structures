<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetectionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Timestamp
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE' $Status
 * @property string $FailureReason
 */
class ExecutionStatus extends Shape
{
    /**
     * @param array{
     *     Timestamp?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'FAILED_TO_SCHEDULE',
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
