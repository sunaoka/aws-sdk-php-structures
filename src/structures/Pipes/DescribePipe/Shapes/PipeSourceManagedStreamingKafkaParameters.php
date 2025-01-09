<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 * @property int<1, 10000> $BatchSize
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 * @property string $ConsumerGroupID
 * @property MSKAccessCredentials $Credentials
 */
class PipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST',
     *     BatchSize?: int<1, 10000>,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
     *     ConsumerGroupID?: string,
     *     Credentials?: MSKAccessCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
