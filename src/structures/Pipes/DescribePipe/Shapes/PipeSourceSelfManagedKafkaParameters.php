<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 * @property list<string> $AdditionalBootstrapServers
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 * @property string $ConsumerGroupID
 * @property SelfManagedKafkaAccessConfigurationCredentials $Credentials
 * @property string $ServerRootCaCertificate
 * @property SelfManagedKafkaAccessConfigurationVpc $Vpc
 */
class PipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST',
     *     AdditionalBootstrapServers?: list<string>,
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int,
     *     ConsumerGroupID?: string,
     *     Credentials?: SelfManagedKafkaAccessConfigurationCredentials,
     *     ServerRootCaCertificate?: string,
     *     Vpc?: SelfManagedKafkaAccessConfigurationVpc
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
