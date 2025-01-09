<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MQBrokerAccessCredentials $Credentials
 * @property string $QueueName
 * @property string $VirtualHost
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 */
class PipeSourceRabbitMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     Credentials: MQBrokerAccessCredentials,
     *     QueueName: string,
     *     VirtualHost?: string,
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
