<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperationOverride\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null $Day
 * @property OverrideTimeSlice|null $StartTime
 * @property OverrideTimeSlice|null $EndTime
 */
class HoursOfOperationOverrideConfig extends Shape
{
    /**
     * @param array{
     *     Day?: 'SUNDAY'|'MONDAY'|'TUESDAY'|'WEDNESDAY'|'THURSDAY'|'FRIDAY'|'SATURDAY'|null,
     *     StartTime?: OverrideTimeSlice|null,
     *     EndTime?: OverrideTimeSlice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
