<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 * @property string $ConsumerGroupID
 * @property MSKAccessCredentials $Credentials
 */
class PipeSourceManagedStreamingKafkaParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST',
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int,
     *     ConsumerGroupID?: string,
     *     Credentials?: MSKAccessCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
