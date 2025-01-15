<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $EarliestTime
 * @property \Aws\Api\DateTimeResult|null $LatestTime
 */
class SlotStartTimeRangeRequest extends Shape
{
    /**
     * @param array{
     *     EarliestTime?: \Aws\Api\DateTimeResult|null,
     *     LatestTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
