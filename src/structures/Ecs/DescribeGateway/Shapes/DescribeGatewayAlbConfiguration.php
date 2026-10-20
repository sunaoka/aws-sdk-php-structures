<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GatewayElbNetworkConfiguration|null $networkConfiguration
 * @property 'internet-facing'|'internal'|null $scheme
 * @property GatewayElbAccessLogConfiguration|null $accessLogs
 * @property string|null $webACLArn
 * @property int|null $port
 * @property 'HTTP'|'HTTPS'|null $protocol
 * @property int|null $maxAlbCount
 * @property int|null $currentAlbCount
 * @property 'monitor'|'defensive'|'strictest'|null $httpDesync
 * @property GatewayAlbTestTrafficRules|null $testTrafficRules
 */
class DescribeGatewayAlbConfiguration extends Shape
{
    /**
     * @param array{
     *     networkConfiguration?: GatewayElbNetworkConfiguration|null,
     *     scheme?: 'internet-facing'|'internal'|null,
     *     accessLogs?: GatewayElbAccessLogConfiguration|null,
     *     webACLArn?: string|null,
     *     port?: int|null,
     *     protocol?: 'HTTP'|'HTTPS'|null,
     *     maxAlbCount?: int|null,
     *     currentAlbCount?: int|null,
     *     httpDesync?: 'monitor'|'defensive'|'strictest'|null,
     *     testTrafficRules?: GatewayAlbTestTrafficRules|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
