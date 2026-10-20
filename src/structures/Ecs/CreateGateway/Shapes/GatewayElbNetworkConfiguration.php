<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inboundSecurityGroup
 * @property list<string>|null $subnets
 * @property 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null $ipAddressType
 */
class GatewayElbNetworkConfiguration extends Shape
{
    /**
     * @param array{
     *     inboundSecurityGroup?: string|null,
     *     subnets?: list<string>|null,
     *     ipAddressType?: 'ipv4'|'dualstack'|'dualstack-without-public-ipv4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
