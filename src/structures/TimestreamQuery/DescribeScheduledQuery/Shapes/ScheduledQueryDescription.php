<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $QueryString
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'ENABLED'|'DISABLED' $State
 * @property \Aws\Api\DateTimeResult|null $PreviousInvocationTime
 * @property \Aws\Api\DateTimeResult|null $NextInvocationTime
 * @property ScheduleConfiguration $ScheduleConfiguration
 * @property NotificationConfiguration $NotificationConfiguration
 * @property TargetConfiguration|null $TargetConfiguration
 * @property string|null $ScheduledQueryExecutionRoleArn
 * @property string|null $KmsKeyId
 * @property ErrorReportConfiguration|null $ErrorReportConfiguration
 * @property ScheduledQueryRunSummary|null $LastRunSummary
 * @property list<ScheduledQueryRunSummary>|null $RecentlyFailedRuns
 */
class ScheduledQueryDescription extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     QueryString: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     State: 'ENABLED'|'DISABLED',
     *     PreviousInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     NextInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     ScheduleConfiguration: ScheduleConfiguration,
     *     NotificationConfiguration: NotificationConfiguration,
     *     TargetConfiguration?: TargetConfiguration|null,
     *     ScheduledQueryExecutionRoleArn?: string|null,
     *     KmsKeyId?: string|null,
     *     ErrorReportConfiguration?: ErrorReportConfiguration|null,
     *     LastRunSummary?: ScheduledQueryRunSummary|null,
     *     RecentlyFailedRuns?: list<ScheduledQueryRunSummary>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
