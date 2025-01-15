<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AcceleratorArn
 * @property list<SocketAddress>|null $AcceleratorSocketAddresses
 * @property string|null $EndpointGroupArn
 * @property string|null $EndpointId
 * @property string|null $EndpointGroupRegion
 * @property SocketAddress|null $DestinationSocketAddress
 * @property 'IPV4'|'DUAL_STACK'|null $IpAddressType
 * @property 'ALLOW'|'DENY'|null $DestinationTrafficState
 */
class DestinationPortMapping extends Shape
{
    /**
     * @param array{
     *     AcceleratorArn?: string|null,
     *     AcceleratorSocketAddresses?: list<SocketAddress>|null,
     *     EndpointGroupArn?: string|null,
     *     EndpointId?: string|null,
     *     EndpointGroupRegion?: string|null,
     *     DestinationSocketAddress?: SocketAddress|null,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK'|null,
     *     DestinationTrafficState?: 'ALLOW'|'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
