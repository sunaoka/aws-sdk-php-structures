<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutLogAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property int<1, 2592000> $StartTimeOffset
 * @property int<0, 2592000>|null $EndTimeOffset
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     StartTimeOffset: int<1, 2592000>,
     *     EndTimeOffset?: int<0, 2592000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
