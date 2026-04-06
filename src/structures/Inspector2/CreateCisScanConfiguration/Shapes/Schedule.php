<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCisScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DailySchedule|null $daily
 * @property MonthlySchedule|null $monthly
 * @property OneTimeSchedule|null $oneTime
 * @property WeeklySchedule|null $weekly
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     daily?: DailySchedule|null,
     *     monthly?: MonthlySchedule|null,
     *     oneTime?: OneTimeSchedule|null,
     *     weekly?: WeeklySchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
