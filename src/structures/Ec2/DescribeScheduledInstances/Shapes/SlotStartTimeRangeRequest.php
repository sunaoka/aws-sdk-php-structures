<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EarliestTime
 * @property \Aws\Api\DateTimeResult $LatestTime
 */
class SlotStartTimeRangeRequest extends Shape
{
    /**
     * @param array{
     *     EarliestTime?: \Aws\Api\DateTimeResult,
     *     LatestTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
