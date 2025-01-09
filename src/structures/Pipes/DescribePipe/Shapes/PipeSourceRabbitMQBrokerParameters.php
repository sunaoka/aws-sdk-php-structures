<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MQBrokerAccessCredentials $Credentials
 * @property string $QueueName
 * @property string $VirtualHost
 * @property int<1, 10000> $BatchSize
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 */
class PipeSourceRabbitMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     Credentials: MQBrokerAccessCredentials,
     *     QueueName: string,
     *     VirtualHost?: string,
     *     BatchSize?: int<1, 10000>,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
