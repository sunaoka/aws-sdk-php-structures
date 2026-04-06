<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentConfigName
 * @property Shapes\MinimumHealthyHosts|null $minimumHealthyHosts
 * @property Shapes\TrafficRoutingConfig|null $trafficRoutingConfig
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 * @property Shapes\ZonalConfig|null $zonalConfig
 */
class CreateDeploymentConfigRequest extends Request
{
    /**
     * @param array{
     *     deploymentConfigName: string,
     *     minimumHealthyHosts?: Shapes\MinimumHealthyHosts|null,
     *     trafficRoutingConfig?: Shapes\TrafficRoutingConfig|null,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null,
     *     zonalConfig?: Shapes\ZonalConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
