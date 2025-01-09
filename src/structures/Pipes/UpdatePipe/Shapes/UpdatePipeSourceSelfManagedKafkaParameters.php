<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000> $BatchSize
 * @property int<0, 300> $MaximumBatchingWindowInSeconds
 * @property SelfManagedKafkaAccessConfigurationCredentials $Credentials
 * @property string $ServerRootCaCertificate
 * @property SelfManagedKafkaAccessConfigurationVpc $Vpc
 */
class UpdatePipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>,
     *     Credentials?: SelfManagedKafkaAccessConfigurationCredentials,
     *     ServerRootCaCertificate?: string,
     *     Vpc?: SelfManagedKafkaAccessConfigurationVpc
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
