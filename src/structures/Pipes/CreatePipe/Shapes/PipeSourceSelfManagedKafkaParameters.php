<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AdditionalBootstrapServers
 * @property int<1, 10000>|null $BatchSize
 * @property string|null $ConsumerGroupID
 * @property SelfManagedKafkaAccessConfigurationCredentials|null $Credentials
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string|null $ServerRootCaCertificate
 * @property 'TRIM_HORIZON'|'LATEST'|null $StartingPosition
 * @property string $TopicName
 * @property SelfManagedKafkaAccessConfigurationVpc|null $Vpc
 */
class PipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     AdditionalBootstrapServers?: list<string>|null,
     *     BatchSize?: int<1, 10000>|null,
     *     ConsumerGroupID?: string|null,
     *     Credentials?: SelfManagedKafkaAccessConfigurationCredentials|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ServerRootCaCertificate?: string|null,
     *     StartingPosition?: 'TRIM_HORIZON'|'LATEST'|null,
     *     TopicName: string,
     *     Vpc?: SelfManagedKafkaAccessConfigurationVpc|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
