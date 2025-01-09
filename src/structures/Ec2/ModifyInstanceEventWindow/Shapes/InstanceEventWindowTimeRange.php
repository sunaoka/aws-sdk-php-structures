<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday' $StartWeekDay
 * @property int<0, 23> $StartHour
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday' $EndWeekDay
 * @property int<0, 23> $EndHour
 */
class InstanceEventWindowTimeRange extends Shape
{
    /**
     * @param array{
     *     StartWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday',
     *     StartHour?: int<0, 23>,
     *     EndWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday',
     *     EndHour?: int<0, 23>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
