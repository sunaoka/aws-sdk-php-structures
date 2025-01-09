<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateHoursOfOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY' $Day
 * @property HoursOfOperationTimeSlice $StartTime
 * @property HoursOfOperationTimeSlice $EndTime
 */
class HoursOfOperationConfig extends Shape
{
    /**
     * @param array{
     *     Day: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY',
     *     StartTime: HoursOfOperationTimeSlice,
     *     EndTime: HoursOfOperationTimeSlice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
