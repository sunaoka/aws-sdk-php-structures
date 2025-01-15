<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MQBrokerAccessCredentials $Credentials
 * @property string $QueueName
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 */
class PipeSourceActiveMQBrokerParameters extends Shape
{
    /**
     * @param array{
     *     Credentials: MQBrokerAccessCredentials,
     *     QueueName: string,
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
