<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $startTime
 */
class ScheduledJobRollout extends Shape
{
    /**
     * @param array{startTime?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
