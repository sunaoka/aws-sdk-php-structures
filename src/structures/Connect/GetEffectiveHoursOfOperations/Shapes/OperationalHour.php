<?php

namespace Sunaoka\Aws\Structures\Connect\GetEffectiveHoursOfOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OverrideTimeSlice|null $Start
 * @property OverrideTimeSlice|null $End
 */
class OperationalHour extends Shape
{
    /**
     * @param array{
     *     Start?: OverrideTimeSlice|null,
     *     End?: OverrideTimeSlice|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
