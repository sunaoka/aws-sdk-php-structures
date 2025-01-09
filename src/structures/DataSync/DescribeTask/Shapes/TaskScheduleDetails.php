<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StatusUpdateTime
 * @property string $DisabledReason
 * @property 'USER'|'SERVICE' $DisabledBy
 */
class TaskScheduleDetails extends Shape
{
    /**
     * @param array{
     *     StatusUpdateTime?: \Aws\Api\DateTimeResult,
     *     DisabledReason?: string,
     *     DisabledBy?: 'USER'|'SERVICE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
