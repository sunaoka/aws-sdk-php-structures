<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceName
 * @property Shapes\SourceConfiguration $SourceConfiguration
 * @property Shapes\InstanceConfiguration|null $InstanceConfiguration
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\HealthCheckConfiguration|null $HealthCheckConfiguration
 * @property string|null $AutoScalingConfigurationArn
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property Shapes\ServiceObservabilityConfiguration|null $ObservabilityConfiguration
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     ServiceName: string,
     *     SourceConfiguration: Shapes\SourceConfiguration,
     *     InstanceConfiguration?: Shapes\InstanceConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     HealthCheckConfiguration?: Shapes\HealthCheckConfiguration|null,
     *     AutoScalingConfigurationArn?: string|null,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     ObservabilityConfiguration?: Shapes\ServiceObservabilityConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
