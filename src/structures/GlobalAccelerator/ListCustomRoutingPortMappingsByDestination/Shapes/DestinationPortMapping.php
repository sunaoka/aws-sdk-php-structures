<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcceleratorArn
 * @property list<SocketAddress> $AcceleratorSocketAddresses
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property string $EndpointGroupRegion
 * @property SocketAddress $DestinationSocketAddress
 * @property 'IPV4'|'DUAL_STACK' $IpAddressType
 * @property 'ALLOW'|'DENY' $DestinationTrafficState
 */
class DestinationPortMapping extends Shape
{
    /**
     * @param array{
     *     AcceleratorArn?: string,
     *     AcceleratorSocketAddresses?: list<SocketAddress>,
     *     EndpointGroupArn?: string,
     *     EndpointId?: string,
     *     EndpointGroupRegion?: string,
     *     DestinationSocketAddress?: SocketAddress,
     *     IpAddressType?: 'IPV4'|'DUAL_STACK',
     *     DestinationTrafficState?: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
