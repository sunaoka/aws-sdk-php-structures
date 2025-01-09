<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumRetryAttempts
 * @property int $MaximumEventAgeInSeconds
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaximumRetryAttempts?: int,
     *     MaximumEventAgeInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
