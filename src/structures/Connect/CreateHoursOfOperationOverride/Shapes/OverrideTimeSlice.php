<?php

namespace Sunaoka\Aws\Structures\Connect\CreateHoursOfOperationOverride\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 23> $Hours
 * @property int<0, 59> $Minutes
 */
class OverrideTimeSlice extends Shape
{
    /**
     * @param array{
     *     Hours: int<0, 23>,
     *     Minutes: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
