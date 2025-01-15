<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 185>|null $MaximumRetryAttempts
 * @property int<60, 86400>|null $MaximumEventAgeInSeconds
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumRetryAttempts?: int<0, 185>|null,
     *     MaximumEventAgeInSeconds?: int<60, 86400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
