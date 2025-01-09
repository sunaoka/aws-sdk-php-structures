<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduledTriggerProperties $Scheduled
 */
class TriggerProperties extends Shape
{
    /**
     * @param array{Scheduled?: ScheduledTriggerProperties} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
