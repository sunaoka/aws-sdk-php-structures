<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 185>|null $MaxRetryAttempts
 * @property int<60, 86400>|null $MaxEventAgeInSeconds
 * @property 'ALL'|null $RetryStrategy
 */
class RetryPolicy extends Shape
{
    /**
     * @param array{
     *     MaxRetryAttempts?: int<0, 185>|null,
     *     MaxEventAgeInSeconds?: int<60, 86400>|null,
     *     RetryStrategy?: 'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
