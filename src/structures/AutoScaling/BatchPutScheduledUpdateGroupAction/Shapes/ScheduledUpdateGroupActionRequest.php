<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchPutScheduledUpdateGroupAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduledActionName
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Recurrence
 * @property int|null $MinSize
 * @property int|null $MaxSize
 * @property int|null $DesiredCapacity
 * @property string|null $TimeZone
 */
class ScheduledUpdateGroupActionRequest extends Shape
{
    /**
     * @param array{
     *     ScheduledActionName: string,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Recurrence?: string|null,
     *     MinSize?: int|null,
     *     MaxSize?: int|null,
     *     DesiredCapacity?: int|null,
     *     TimeZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
