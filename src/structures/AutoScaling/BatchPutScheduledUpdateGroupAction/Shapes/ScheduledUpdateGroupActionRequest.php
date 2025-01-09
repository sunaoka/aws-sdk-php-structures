<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchPutScheduledUpdateGroupAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduledActionName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Recurrence
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property string $TimeZone
 */
class ScheduledUpdateGroupActionRequest extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Recurrence?: string,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     DesiredCapacity?: int,
     *     TimeZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
