<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AcceleratorPort
 * @property string $EndpointGroupArn
 * @property string $EndpointId
 * @property SocketAddress $DestinationSocketAddress
 * @property list<'TCP'|'UDP'> $Protocols
 * @property 'ALLOW'|'DENY' $DestinationTrafficState
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     AcceleratorPort?: int,
     *     EndpointGroupArn?: string,
     *     EndpointId?: string,
     *     DestinationSocketAddress?: SocketAddress,
     *     Protocols?: list<'TCP'|'UDP'>,
     *     DestinationTrafficState?: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
