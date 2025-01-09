<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoScalingGroupName
 * @property string $ScheduledActionName
 * @property string $ScheduledActionARN
 * @property \Aws\Api\DateTimeResult $Time
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Recurrence
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property string $TimeZone
 */
class ScheduledUpdateGroupAction extends Shape
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     ScheduledActionName?: string,
     *     ScheduledActionARN?: string,
     *     Time?: \Aws\Api\DateTimeResult,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Recurrence?: string,
     *     MinSize?: int,
     *     MaxSize?: int,
     *     DesiredCapacity?: int,
     *     TimeZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
