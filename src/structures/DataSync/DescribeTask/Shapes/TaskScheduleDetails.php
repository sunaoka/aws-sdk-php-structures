<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StatusUpdateTime
 * @property string|null $DisabledReason
 * @property 'USER'|'SERVICE'|null $DisabledBy
 */
class TaskScheduleDetails extends Shape
{
    /**
     * @param array{
     *     StatusUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     DisabledReason?: string|null,
     *     DisabledBy?: 'USER'|'SERVICE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
