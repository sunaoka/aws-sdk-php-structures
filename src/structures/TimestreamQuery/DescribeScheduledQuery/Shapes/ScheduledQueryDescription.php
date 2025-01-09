<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $QueryString
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'ENABLED'|'DISABLED' $State
 * @property \Aws\Api\DateTimeResult $PreviousInvocationTime
 * @property \Aws\Api\DateTimeResult $NextInvocationTime
 * @property ScheduleConfiguration $ScheduleConfiguration
 * @property NotificationConfiguration $NotificationConfiguration
 * @property TargetConfiguration $TargetConfiguration
 * @property string $ScheduledQueryExecutionRoleArn
 * @property string $KmsKeyId
 * @property ErrorReportConfiguration $ErrorReportConfiguration
 * @property ScheduledQueryRunSummary $LastRunSummary
 * @property list<ScheduledQueryRunSummary> $RecentlyFailedRuns
 */
class ScheduledQueryDescription extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     QueryString: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     State: 'ENABLED'|'DISABLED',
     *     PreviousInvocationTime?: \Aws\Api\DateTimeResult,
     *     NextInvocationTime?: \Aws\Api\DateTimeResult,
     *     ScheduleConfiguration: ScheduleConfiguration,
     *     NotificationConfiguration: NotificationConfiguration,
     *     TargetConfiguration?: TargetConfiguration,
     *     ScheduledQueryExecutionRoleArn?: string,
     *     KmsKeyId?: string,
     *     ErrorReportConfiguration?: ErrorReportConfiguration,
     *     LastRunSummary?: ScheduledQueryRunSummary,
     *     RecentlyFailedRuns?: list<ScheduledQueryRunSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
