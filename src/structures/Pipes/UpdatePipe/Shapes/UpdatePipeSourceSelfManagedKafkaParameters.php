<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BatchSize
 * @property int $MaximumBatchingWindowInSeconds
 * @property SelfManagedKafkaAccessConfigurationCredentials $Credentials
 * @property string $ServerRootCaCertificate
 * @property SelfManagedKafkaAccessConfigurationVpc $Vpc
 */
class UpdatePipeSourceSelfManagedKafkaParameters extends Shape
{
    /**
     * @param array{
     *     BatchSize?: int,
     *     MaximumBatchingWindowInSeconds?: int,
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
