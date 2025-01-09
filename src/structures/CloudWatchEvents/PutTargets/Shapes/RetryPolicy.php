<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 185> $MaximumRetryAttempts
 * @property int<60, 86400> $MaximumEventAgeInSeconds
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumRetryAttempts?: int<0, 185>,
     *     MaximumEventAgeInSeconds?: int<60, 86400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
