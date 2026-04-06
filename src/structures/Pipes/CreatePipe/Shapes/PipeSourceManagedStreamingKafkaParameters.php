<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property string|null $ConsumerGroupID
 * @property MSKAccessCredentials|null $Credentials
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property 'TRIM_HORIZON'|'LATEST'|null $StartingPosition
 * @property string $TopicName
 */
class PipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     ConsumerGroupID?: string|null,
     *     Credentials?: MSKAccessCredentials|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|null,
     *     TopicName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
