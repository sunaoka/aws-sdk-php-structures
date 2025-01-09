<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentConfigName
 * @property Shapes\MinimumHealthyHosts $minimumHealthyHosts
 * @property Shapes\TrafficRoutingConfig $trafficRoutingConfig
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 * @property Shapes\ZonalConfig $zonalConfig
 */
class CreateDeploymentConfigRequest extends Request
{
    /**
     * @param array{
     *     deploymentConfigName: string,
     *     minimumHealthyHosts?: Shapes\MinimumHealthyHosts,
     *     trafficRoutingConfig?: Shapes\TrafficRoutingConfig,
     *     computePlatform?: 'Server'|'Lambda'|'ECS',
     *     zonalConfig?: Shapes\ZonalConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
