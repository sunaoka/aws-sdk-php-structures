<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST' $StartingPosition
 * @property list<string> $AdditionalBootstrapServers
 * @property int<1, 10000> $BatchSize
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
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
     *     BatchSize?: int<1, 10000>,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
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
