<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ListScheduledReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $dashboardArn
 * @property string $scheduleExpression
 * @property 'ENABLED'|'DISABLED' $state
 * @property HealthStatus $healthStatus
 * @property string|null $scheduleExpressionTimeZone
 * @property list<string>|null $widgetIds
 */
class ScheduledReportSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     dashboardArn: string,
     *     scheduleExpression: string,
     *     state: 'ENABLED'|'DISABLED',
     *     healthStatus: HealthStatus,
     *     scheduleExpressionTimeZone?: string|null,
     *     widgetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
