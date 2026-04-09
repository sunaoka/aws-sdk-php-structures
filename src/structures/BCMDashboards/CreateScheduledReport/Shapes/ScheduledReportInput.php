<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateScheduledReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $dashboardArn
 * @property string $scheduledReportExecutionRoleArn
 * @property ScheduleConfig $scheduleConfig
 * @property string|null $description
 * @property list<string>|null $widgetIds
 * @property DateTimeRange|null $widgetDateRangeOverride
 */
class ScheduledReportInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     dashboardArn: string,
     *     scheduledReportExecutionRoleArn: string,
     *     scheduleConfig: ScheduleConfig,
     *     description?: string|null,
     *     widgetIds?: list<string>|null,
     *     widgetDateRangeOverride?: DateTimeRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
