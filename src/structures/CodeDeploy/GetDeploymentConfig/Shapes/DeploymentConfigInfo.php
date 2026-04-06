<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentConfigId
 * @property string|null $deploymentConfigName
 * @property MinimumHealthyHosts|null $minimumHealthyHosts
 * @property \Aws\Api\DateTimeResult|null $createTime
 * @property 'Server'|'Lambda'|'ECS'|null $computePlatform
 * @property TrafficRoutingConfig|null $trafficRoutingConfig
 * @property ZonalConfig|null $zonalConfig
 */
class DeploymentConfigInfo extends Shape
{
    /**
     * @param array{
     *     deploymentConfigId?: string|null,
     *     deploymentConfigName?: string|null,
     *     minimumHealthyHosts?: MinimumHealthyHosts|null,
     *     createTime?: \Aws\Api\DateTimeResult|null,
     *     computePlatform?: 'Server'|'Lambda'|'ECS'|null,
     *     trafficRoutingConfig?: TrafficRoutingConfig|null,
     *     zonalConfig?: ZonalConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
