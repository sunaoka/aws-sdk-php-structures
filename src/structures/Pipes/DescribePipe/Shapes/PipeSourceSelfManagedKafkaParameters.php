<?php

namespace Sunaoka\Aws\Structures\Pipes\DescribePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'TRIM_HORIZON'|'LATEST'|null $StartingPosition
 * @property list<string>|null $AdditionalBootstrapServers
 * @property int<1, 10000>|null $BatchSize
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string|null $ConsumerGroupID
 * @property SelfManagedKafkaAccessConfigurationCredentials|null $Credentials
 * @property string|null $ServerRootCaCertificate
 * @property SelfManagedKafkaAccessConfigurationVpc|null $Vpc
 */
class PipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|null,
     *     AdditionalBootstrapServers?: list<string>|null,
     *     BatchSize?: int<1, 10000>|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ConsumerGroupID?: string|null,
     *     Credentials?: SelfManagedKafkaAccessConfigurationCredentials|null,
     *     ServerRootCaCertificate?: string|null,
     *     Vpc?: SelfManagedKafkaAccessConfigurationVpc|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
