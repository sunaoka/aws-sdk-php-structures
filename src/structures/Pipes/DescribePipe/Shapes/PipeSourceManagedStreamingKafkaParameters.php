<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST'|null $StartingPosition
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string|null $ConsumerGroupID
 * @property MSKAccessCredentials|null $Credentials
 */
class PipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|null,
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ConsumerGroupID?: string|null,
     *     Credentials?: MSKAccessCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
