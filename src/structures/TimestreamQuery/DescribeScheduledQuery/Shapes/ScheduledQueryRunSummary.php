<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $InvocationTime
 * @property \Aws\Api\DateTimeResult $TriggerTime
 * @property 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE' $RunStatus
 * @property ExecutionStats $ExecutionStats
 * @property ScheduledQueryInsightsResponse $QueryInsightsResponse
 * @property ErrorReportLocation $ErrorReportLocation
 * @property string $FailureReason
 */
class ScheduledQueryRunSummary extends Shape
{
    /**
     * @param array{
     *     InvocationTime?: \Aws\Api\DateTimeResult,
     *     TriggerTime?: \Aws\Api\DateTimeResult,
     *     RunStatus?: 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE',
     *     ExecutionStats?: ExecutionStats,
     *     QueryInsightsResponse?: ScheduledQueryInsightsResponse,
     *     ErrorReportLocation?: ErrorReportLocation,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
