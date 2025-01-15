<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AutoScalingGroupName
 * @property list<string>|null $ScheduledActionNames
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     ScheduledActionNames?: list<string>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
