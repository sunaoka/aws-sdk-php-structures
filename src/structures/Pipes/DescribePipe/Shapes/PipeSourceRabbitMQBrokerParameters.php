<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property MQBrokerAccessCredentials $Credentials
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string $QueueName
 * @property string|null $VirtualHost
 */
class PipeSourceRabbitMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     Credentials: MQBrokerAccessCredentials,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     QueueName: string,
     *     VirtualHost?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
