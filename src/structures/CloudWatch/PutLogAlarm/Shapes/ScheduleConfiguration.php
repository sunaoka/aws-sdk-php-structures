<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutLogAlarm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property int|null $StartTimeOffset
 * @property int|null $EndTimeOffset
 */
class ScheduleConfiguration extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     StartTimeOffset?: int|null,
     *     EndTimeOffset?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
