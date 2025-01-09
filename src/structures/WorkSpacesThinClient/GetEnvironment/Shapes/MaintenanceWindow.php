<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SYSTEM'|'CUSTOM' $type
 * @property int $startTimeHour
 * @property int $startTimeMinute
 * @property int $endTimeHour
 * @property int $endTimeMinute
 * @property list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'> $daysOfTheWeek
 * @property 'UTC'|'DEVICE' $applyTimeOf
 */
class MaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     type?: 'SYSTEM'|'CUSTOM',
     *     startTimeHour?: int,
     *     startTimeMinute?: int,
     *     endTimeHour?: int,
     *     endTimeMinute?: int,
     *     daysOfTheWeek?: list<'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|'SUNDAY'>,
     *     applyTimeOf?: 'UTC'|'DEVICE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
