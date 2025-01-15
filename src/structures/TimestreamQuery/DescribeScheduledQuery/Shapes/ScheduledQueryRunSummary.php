<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $InvocationTime
 * @property \Aws\Api\DateTimeResult|null $TriggerTime
 * @property 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE'|null $RunStatus
 * @property ExecutionStats|null $ExecutionStats
 * @property ScheduledQueryInsightsResponse|null $QueryInsightsResponse
 * @property ErrorReportLocation|null $ErrorReportLocation
 * @property string|null $FailureReason
 */
class ScheduledQueryRunSummary extends Shape
{
    /**
     * @param array{
     *     InvocationTime?: \Aws\Api\DateTimeResult|null,
     *     TriggerTime?: \Aws\Api\DateTimeResult|null,
     *     RunStatus?: 'AUTO_TRIGGER_SUCCESS'|'AUTO_TRIGGER_FAILURE'|'MANUAL_TRIGGER_SUCCESS'|'MANUAL_TRIGGER_FAILURE'|null,
     *     ExecutionStats?: ExecutionStats|null,
     *     QueryInsightsResponse?: ScheduledQueryInsightsResponse|null,
     *     ErrorReportLocation?: ErrorReportLocation|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
