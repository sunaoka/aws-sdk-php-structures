<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateGatewayNetworkConfiguration|null $networkConfiguration
 * @property int|null $maxAlbCount
 * @property string|null $webACLArn
 * @property GatewayElbAccessLogConfiguration|null $accessLogs
 * @property 'monitor'|'defensive'|'strictest'|null $httpDesync
 * @property GatewayAlbTestTrafficRules|null $testTrafficRules
 */
class UpdateGatewayAlbConfiguration extends Shape
{
    /**
     * @param array{
     *     networkConfiguration?: UpdateGatewayNetworkConfiguration|null,
     *     maxAlbCount?: int|null,
     *     webACLArn?: string|null,
     *     accessLogs?: GatewayElbAccessLogConfiguration|null,
     *     httpDesync?: 'monitor'|'defensive'|'strictest'|null,
     *     testTrafficRules?: GatewayAlbTestTrafficRules|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
