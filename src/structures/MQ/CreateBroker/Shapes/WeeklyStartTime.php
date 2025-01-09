<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $DayOfWeek
 * @property string $TimeOfDay
 * @property string $TimeZone
 */
class WeeklyStartTime extends Shape
{
    /**
     * @param array{
     *     DayOfWeek: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     TimeOfDay: string,
     *     TimeZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
