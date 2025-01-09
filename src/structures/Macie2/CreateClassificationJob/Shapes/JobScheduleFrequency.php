<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailySchedule $dailySchedule
 * @property MonthlySchedule $monthlySchedule
 * @property WeeklySchedule $weeklySchedule
 */
class JobScheduleFrequency extends Shape
{
    /**
     * @param array{
     *     dailySchedule?: DailySchedule,
     *     monthlySchedule?: MonthlySchedule,
     *     weeklySchedule?: WeeklySchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
