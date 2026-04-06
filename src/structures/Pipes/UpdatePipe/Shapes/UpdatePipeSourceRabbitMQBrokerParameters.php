<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MQBrokerAccessCredentials $Credentials
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 */
class UpdatePipeSourceRabbitMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     Credentials: MQBrokerAccessCredentials,
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
