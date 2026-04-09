<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateScheduledReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $dashboardArn
 * @property string|null $scheduledReportExecutionRoleArn
 * @property Shapes\ScheduleConfig|null $scheduleConfig
 * @property list<string>|null $widgetIds
 * @property Shapes\DateTimeRange|null $widgetDateRangeOverride
 * @property bool|null $clearWidgetIds
 * @property bool|null $clearWidgetDateRangeOverride
 */
class UpdateScheduledReportRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     name?: string|null,
     *     description?: string|null,
     *     dashboardArn?: string|null,
     *     scheduledReportExecutionRoleArn?: string|null,
     *     scheduleConfig?: Shapes\ScheduleConfig|null,
     *     widgetIds?: list<string>|null,
     *     widgetDateRangeOverride?: Shapes\DateTimeRange|null,
     *     clearWidgetIds?: bool|null,
     *     clearWidgetDateRangeOverride?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
