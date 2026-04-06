<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property MQBrokerAccessCredentials $Credentials
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string $QueueName
 */
class PipeSourceActiveMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     Credentials: MQBrokerAccessCredentials,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     QueueName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
