<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 31> $DayOfMonth
 * @property int<0, 6> $DayOfWeek
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 */
class MaintenanceStartTime extends Shape
{
    /**
     * @param array{
     *     DayOfMonth?: int<1, 31>,
     *     DayOfWeek?: int<0, 6>,
     *     HourOfDay: int<0, 23>,
     *     MinuteOfHour: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
