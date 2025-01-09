<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceName
 * @property Shapes\SourceConfiguration $SourceConfiguration
 * @property Shapes\InstanceConfiguration $InstanceConfiguration
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 * @property Shapes\HealthCheckConfiguration $HealthCheckConfiguration
 * @property string $AutoScalingConfigurationArn
 * @property Shapes\NetworkConfiguration $NetworkConfiguration
 * @property Shapes\ServiceObservabilityConfiguration $ObservabilityConfiguration
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     ServiceName: string,
     *     SourceConfiguration: Shapes\SourceConfiguration,
     *     InstanceConfiguration?: Shapes\InstanceConfiguration,
     *     Tags?: list<Shapes\Tag>,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration,
     *     HealthCheckConfiguration?: Shapes\HealthCheckConfiguration,
     *     AutoScalingConfigurationArn?: string,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration,
     *     ObservabilityConfiguration?: Shapes\ServiceObservabilityConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
