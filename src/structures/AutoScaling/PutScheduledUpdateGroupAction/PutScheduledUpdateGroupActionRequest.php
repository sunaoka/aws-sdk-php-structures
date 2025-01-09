<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScheduledUpdateGroupAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $ScheduledActionName
 * @property \Aws\Api\DateTimeResult $Time
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Recurrence
 * @property int $MinSize
 * @property int $MaxSize
 * @property int $DesiredCapacity
 * @property string $TimeZone
 */
class PutScheduledUpdateGroupActionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScheduledActionName: string,
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
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
