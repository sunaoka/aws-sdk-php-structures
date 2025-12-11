<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ScheduledEndTimestamp
 */
class WaitDetails extends Shape
{
    /**
     * @param array{ScheduledEndTimestamp?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
