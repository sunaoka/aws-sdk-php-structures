<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10000>|null $BatchSize
 * @property SelfManagedKafkaAccessConfigurationCredentials|null $Credentials
 * @property int<0, 300>|null $MaximumBatchingWindowInSeconds
 * @property string|null $ServerRootCaCertificate
 * @property SelfManagedKafkaAccessConfigurationVpc|null $Vpc
 */
class UpdatePipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int<1, 10000>|null,
     *     Credentials?: SelfManagedKafkaAccessConfigurationCredentials|null,
     *     MaximumBatchingWindowInSeconds?: int<0, 300>|null,
     *     ServerRootCaCertificate?: string|null,
     *     Vpc?: SelfManagedKafkaAccessConfigurationVpc|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
