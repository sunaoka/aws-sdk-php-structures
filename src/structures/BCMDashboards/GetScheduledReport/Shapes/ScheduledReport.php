<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetScheduledReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string $name
 * @property string $dashboardArn
 * @property string $scheduledReportExecutionRoleArn
 * @property ScheduleConfig $scheduleConfig
 * @property string|null $description
 * @property list<string>|null $widgetIds
 * @property DateTimeRange|null $widgetDateRangeOverride
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $lastExecutionAt
 * @property HealthStatus|null $healthStatus
 */
class ScheduledReport extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name: string,
     *     dashboardArn: string,
     *     scheduledReportExecutionRoleArn: string,
     *     scheduleConfig: ScheduleConfig,
     *     description?: string|null,
     *     widgetIds?: list<string>|null,
     *     widgetDateRangeOverride?: DateTimeRange|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     lastExecutionAt?: \Aws\Api\DateTimeResult|null,
     *     healthStatus?: HealthStatus|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
