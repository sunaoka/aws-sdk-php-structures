<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deploymentConfigId
 * @property string $deploymentConfigName
 * @property MinimumHealthyHosts $minimumHealthyHosts
 * @property \Aws\Api\DateTimeResult $createTime
 * @property 'Server'|'Lambda'|'ECS' $computePlatform
 * @property TrafficRoutingConfig $trafficRoutingConfig
 * @property ZonalConfig $zonalConfig
 */
class DeploymentConfigInfo extends Shape
{
    /**
     * @param array{
     *     deploymentConfigId?: string,
     *     deploymentConfigName?: string,
     *     minimumHealthyHosts?: MinimumHealthyHosts,
     *     createTime?: \Aws\Api\DateTimeResult,
     *     computePlatform?: 'Server'|'Lambda'|'ECS',
     *     trafficRoutingConfig?: TrafficRoutingConfig,
     *     zonalConfig?: ZonalConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
