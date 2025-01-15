<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYSTEM'|'CUSTOM' $type
 * @property int<0, 23>|null $startTimeHour
 * @property int<0, 59>|null $startTimeMinute
 * @property int<0, 23>|null $endTimeHour
 * @property int<0, 59>|null $endTimeMinute
 * @property list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'>|null $daysOfTheWeek
 * @property 'UTC'|'DEVICE'|null $applyTimeOf
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     type: 'SYSTEM'|'CUSTOM',
     *     startTimeHour?: int<0, 23>|null,
     *     startTimeMinute?: int<0, 59>|null,
     *     endTimeHour?: int<0, 23>|null,
     *     endTimeMinute?: int<0, 59>|null,
     *     daysOfTheWeek?: list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'>|null,
     *     applyTimeOf?: 'UTC'|'DEVICE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
