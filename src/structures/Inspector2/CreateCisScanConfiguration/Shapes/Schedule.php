<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OneTimeSchedule|null $oneTime
 * @property DailySchedule|null $daily
 * @property WeeklySchedule|null $weekly
 * @property MonthlySchedule|null $monthly
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     oneTime?: OneTimeSchedule|null,
     *     daily?: DailySchedule|null,
     *     weekly?: WeeklySchedule|null,
     *     monthly?: MonthlySchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
