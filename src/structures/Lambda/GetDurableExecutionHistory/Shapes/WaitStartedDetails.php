<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $Duration
 * @property \Aws\Api\DateTimeResult $ScheduledEndTimestamp
 */
class WaitStartedDetails extends Shape
{
    /**
     * @param array{
     *     Duration: int<0, max>,
     *     ScheduledEndTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
