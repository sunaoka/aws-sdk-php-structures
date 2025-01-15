<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutoScalingGroupName
 * @property string|null $ScheduledActionName
 * @property string|null $ScheduledActionARN
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Recurrence
 * @property int|null $MinSize
 * @property int|null $MaxSize
 * @property int|null $DesiredCapacity
 * @property string|null $TimeZone
 */
class ScheduledUpdateGroupAction extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     ScheduledActionName?: string|null,
     *     ScheduledActionARN?: string|null,
     *     Time?: \Aws\Api\DateTimeResult|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Recurrence?: string|null,
     *     MinSize?: int|null,
     *     MaxSize?: int|null,
     *     DesiredCapacity?: int|null,
     *     TimeZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
