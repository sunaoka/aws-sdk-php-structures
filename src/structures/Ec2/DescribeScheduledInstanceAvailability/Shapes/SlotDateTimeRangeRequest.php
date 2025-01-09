<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstanceAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $EarliestTime
 * @property \Aws\Api\DateTimeResult $LatestTime
 */
class SlotDateTimeRangeRequest extends Shape
{
    /**
     * @param array{
     *     EarliestTime: \Aws\Api\DateTimeResult,
     *     LatestTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
