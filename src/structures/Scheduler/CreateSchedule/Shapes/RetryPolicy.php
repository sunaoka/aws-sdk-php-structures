<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 86400> $MaximumEventAgeInSeconds
 * @property int<0, 185> $MaximumRetryAttempts
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumEventAgeInSeconds?: int<60, 86400>,
     *     MaximumRetryAttempts?: int<0, 185>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
