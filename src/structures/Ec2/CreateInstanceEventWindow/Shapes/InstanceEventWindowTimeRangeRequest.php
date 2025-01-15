<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday'|null $StartWeekDay
 * @property int<0, 23>|null $StartHour
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday'|null $EndWeekDay
 * @property int<0, 23>|null $EndHour
 */
class InstanceEventWindowTimeRangeRequest extends Shape
{
    /**
     * @param array{
     *     StartWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday'|null,
     *     StartHour?: int<0, 23>|null,
     *     EndWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday'|null,
     *     EndHour?: int<0, 23>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
