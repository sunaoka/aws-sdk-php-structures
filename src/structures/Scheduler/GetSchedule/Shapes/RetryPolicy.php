<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumEventAgeInSeconds
 * @property int $MaximumRetryAttempts
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumEventAgeInSeconds?: int,
     *     MaximumRetryAttempts?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
