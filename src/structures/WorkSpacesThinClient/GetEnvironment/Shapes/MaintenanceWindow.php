<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYSTEM'|'CUSTOM' $type
 * @property int<0, 23> $startTimeHour
 * @property int<0, 59> $startTimeMinute
 * @property int<0, 23> $endTimeHour
 * @property int<0, 59> $endTimeMinute
 * @property list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'> $daysOfTheWeek
 * @property 'UTC'|'DEVICE' $applyTimeOf
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     type?: 'SYSTEM'|'CUSTOM',
     *     startTimeHour?: int<0, 23>,
     *     startTimeMinute?: int<0, 59>,
     *     endTimeHour?: int<0, 23>,
     *     endTimeMinute?: int<0, 59>,
     *     daysOfTheWeek?: list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'>,
     *     applyTimeOf?: 'UTC'|'DEVICE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
