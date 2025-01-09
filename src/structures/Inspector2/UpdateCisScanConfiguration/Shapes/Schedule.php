<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailySchedule $daily
 * @property MonthlySchedule $monthly
 * @property OneTimeSchedule $oneTime
 * @property WeeklySchedule $weekly
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     daily?: DailySchedule,
     *     monthly?: MonthlySchedule,
     *     oneTime?: OneTimeSchedule,
     *     weekly?: WeeklySchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
