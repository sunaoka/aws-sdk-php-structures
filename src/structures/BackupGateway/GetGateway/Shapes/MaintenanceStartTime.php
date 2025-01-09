<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DayOfMonth
 * @property int $DayOfWeek
 * @property int $HourOfDay
 * @property int $MinuteOfHour
 */
class MaintenanceStartTime extends Shape
{
    /**
     * @param array{
     *     DayOfMonth?: int,
     *     DayOfWeek?: int,
     *     HourOfDay: int,
     *     MinuteOfHour: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
