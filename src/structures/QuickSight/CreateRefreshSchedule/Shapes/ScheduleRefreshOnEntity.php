<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRefreshSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null $DayOfWeek
 * @property string|null $DayOfMonth
 */
class ScheduleRefreshOnEntity extends Shape
{
    /**
     * @param array{
     *     DayOfWeek?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null,
     *     DayOfMonth?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
