<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScheduledActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $ScheduledActionNames
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 * @property int $MaxRecords
 */
class DescribeScheduledActionsRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string,
     *     ScheduledActionNames?: list<string>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
