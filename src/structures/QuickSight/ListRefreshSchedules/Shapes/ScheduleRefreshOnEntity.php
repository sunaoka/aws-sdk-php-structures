<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListRefreshSchedules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY' $DayOfWeek
 * @property string $DayOfMonth
 */
class ScheduleRefreshOnEntity extends Shape
{
    /**
     * @param array{
     *     DayOfWeek?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY',
     *     DayOfMonth?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
