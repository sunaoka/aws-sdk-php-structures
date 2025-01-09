<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateRotation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 23> $HourOfDay
 * @property int<0, 59> $MinuteOfHour
 */
class HandOffTime extends Shape
{
    /**
     * @param array{
     *     HourOfDay: int<0, 23>,
     *     MinuteOfHour: int<0, 59>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
