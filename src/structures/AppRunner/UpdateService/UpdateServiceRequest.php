<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property Shapes\SourceConfiguration $SourceConfiguration
 * @property Shapes\InstanceConfiguration $InstanceConfiguration
 * @property string $AutoScalingConfigurationArn
 * @property Shapes\HealthCheckConfiguration $HealthCheckConfiguration
 * @property Shapes\NetworkConfiguration $NetworkConfiguration
 * @property Shapes\ServiceObservabilityConfiguration $ObservabilityConfiguration
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     SourceConfiguration?: Shapes\SourceConfiguration,
     *     InstanceConfiguration?: Shapes\InstanceConfiguration,
     *     AutoScalingConfigurationArn?: string,
     *     HealthCheckConfiguration?: Shapes\HealthCheckConfiguration,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration,
     *     ObservabilityConfiguration?: Shapes\ServiceObservabilityConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
