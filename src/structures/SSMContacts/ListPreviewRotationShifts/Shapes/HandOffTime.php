<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPreviewRotationShifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HourOfDay
 * @property int $MinuteOfHour
 */
class HandOffTime extends Shape
{
    /**
     * @param array{
     *     HourOfDay: int,
     *     MinuteOfHour: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
