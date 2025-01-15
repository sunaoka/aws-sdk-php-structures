<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property Shapes\SourceConfiguration|null $SourceConfiguration
 * @property Shapes\InstanceConfiguration|null $InstanceConfiguration
 * @property string|null $AutoScalingConfigurationArn
 * @property Shapes\HealthCheckConfiguration|null $HealthCheckConfiguration
 * @property Shapes\NetworkConfiguration|null $NetworkConfiguration
 * @property Shapes\ServiceObservabilityConfiguration|null $ObservabilityConfiguration
 */
class UpdateServiceRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     SourceConfiguration?: Shapes\SourceConfiguration|null,
     *     InstanceConfiguration?: Shapes\InstanceConfiguration|null,
     *     AutoScalingConfigurationArn?: string|null,
     *     HealthCheckConfiguration?: Shapes\HealthCheckConfiguration|null,
     *     NetworkConfiguration?: Shapes\NetworkConfiguration|null,
     *     ObservabilityConfiguration?: Shapes\ServiceObservabilityConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
