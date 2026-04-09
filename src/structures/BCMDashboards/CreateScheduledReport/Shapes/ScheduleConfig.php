<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateScheduledReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scheduleExpression
 * @property string|null $scheduleExpressionTimeZone
 * @property SchedulePeriod|null $schedulePeriod
 * @property 'ENABLED'|'DISABLED'|null $state
 */
class ScheduleConfig extends Shape
{
    /**
     * @param array{
     *     scheduleExpression?: string|null,
     *     scheduleExpressionTimeZone?: string|null,
     *     schedulePeriod?: SchedulePeriod|null,
     *     state?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
