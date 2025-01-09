<?php

namespace Sunaoka\Aws\Structures\IoTEventsData\DescribeAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $snoozeDuration
 * @property string $note
 */
class SnoozeActionConfiguration extends Shape
{
    /**
     * @param array{
     *     snoozeDuration?: int,
     *     note?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
