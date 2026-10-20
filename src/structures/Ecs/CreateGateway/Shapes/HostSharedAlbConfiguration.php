<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayElbNetworkConfiguration|null $networkConfiguration
 * @property 'internet-facing'|'internal'|null $scheme
 * @property string|null $webACLArn
 * @property GatewayElbAccessLogConfiguration|null $accessLogs
 * @property int|null $port
 * @property 'HTTP'|'HTTPS'|null $protocol
 * @property int|null $maxAlbCount
 * @property 'monitor'|'defensive'|'strictest'|null $httpDesync
 * @property GatewayAlbTestTrafficRules|null $testTrafficRules
 */
class HostSharedAlbConfiguration extends Shape
{
    /**
     * @param array{
     *     networkConfiguration?: GatewayElbNetworkConfiguration|null,
     *     scheme?: 'internet-facing'|'internal'|null,
     *     webACLArn?: string|null,
     *     accessLogs?: GatewayElbAccessLogConfiguration|null,
     *     port?: int|null,
     *     protocol?: 'HTTP'|'HTTPS'|null,
     *     maxAlbCount?: int|null,
     *     httpDesync?: 'monitor'|'defensive'|'strictest'|null,
     *     testTrafficRules?: GatewayAlbTestTrafficRules|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
