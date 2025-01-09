<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateInstanceEventWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday' $StartWeekDay
 * @property int $StartHour
 * @property 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday' $EndWeekDay
 * @property int $EndHour
 */
class InstanceEventWindowTimeRange extends Shape
{
    /**
     * @param array{
     *     StartWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday',
     *     StartHour?: int,
     *     EndWeekDay?: 'sunday'|'monday'|'tuesday'|'wednesday'|'thursday'|'friday'|'saturday',
     *     EndHour?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
