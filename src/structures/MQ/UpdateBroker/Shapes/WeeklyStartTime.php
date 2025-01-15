<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY' $DayOfWeek
 * @property string $TimeOfDay
 * @property string|null $TimeZone
 */
class WeeklyStartTime extends Shape
{
    /**
     * @param array{
     *     DayOfWeek: 'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY',
     *     TimeOfDay: string,
     *     TimeZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
