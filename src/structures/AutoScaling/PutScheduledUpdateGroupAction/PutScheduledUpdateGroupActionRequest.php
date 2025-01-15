<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScheduledUpdateGroupAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $ScheduledActionName
 * @property \Aws\Api\DateTimeResult|null $Time
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Recurrence
 * @property int|null $MinSize
 * @property int|null $MaxSize
 * @property int|null $DesiredCapacity
 * @property string|null $TimeZone
 */
class PutScheduledUpdateGroupActionRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ScheduledActionName: string,
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
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
