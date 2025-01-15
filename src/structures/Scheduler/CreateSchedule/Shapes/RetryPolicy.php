<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<60, 86400>|null $MaximumEventAgeInSeconds
 * @property int<0, 185>|null $MaximumRetryAttempts
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumEventAgeInSeconds?: int<60, 86400>|null,
     *     MaximumRetryAttempts?: int<0, 185>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
