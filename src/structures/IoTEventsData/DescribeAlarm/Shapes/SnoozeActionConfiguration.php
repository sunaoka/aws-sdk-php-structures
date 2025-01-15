<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $snoozeDuration
 * @property string|null $note
 */
class SnoozeActionConfiguration extends Shape
{
    /**
     * @param array{
     *     snoozeDuration?: int|null,
     *     note?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
