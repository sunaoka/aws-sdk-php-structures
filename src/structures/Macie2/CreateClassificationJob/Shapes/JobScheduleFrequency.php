<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailySchedule|null $dailySchedule
 * @property MonthlySchedule|null $monthlySchedule
 * @property WeeklySchedule|null $weeklySchedule
 */
class JobScheduleFrequency extends Shape
{
    /**
     * @param array{
     *     dailySchedule?: DailySchedule|null,
     *     monthlySchedule?: MonthlySchedule|null,
     *     weeklySchedule?: WeeklySchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
