<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverrideTimeSlice $Start
 * @property OverrideTimeSlice $End
 */
class OperationalHour extends Shape
{
    /**
     * @param array{
     *     Start?: OverrideTimeSlice,
     *     End?: OverrideTimeSlice
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
