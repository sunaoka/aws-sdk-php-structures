<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY' $Day
 * @property OverrideTimeSlice $StartTime
 * @property OverrideTimeSlice $EndTime
 */
class HoursOfOperationOverrideConfig extends Shape
{
    /**
     * @param array{
     *     Day?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY',
     *     StartTime?: OverrideTimeSlice,
     *     EndTime?: OverrideTimeSlice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
