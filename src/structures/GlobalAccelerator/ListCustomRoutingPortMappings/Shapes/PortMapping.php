<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $AcceleratorPort
 * @property string|null $EndpointGroupArn
 * @property string|null $EndpointId
 * @property SocketAddress|null $DestinationSocketAddress
 * @property list<'TCP'|'UDP'>|null $Protocols
 * @property 'ALLOW'|'DENY'|null $DestinationTrafficState
 */
class PortMapping extends Shape
{
    /**
     * @param array{
     *     AcceleratorPort?: int<1, 65535>|null,
     *     EndpointGroupArn?: string|null,
     *     EndpointId?: string|null,
     *     DestinationSocketAddress?: SocketAddress|null,
     *     Protocols?: list<'TCP'|'UDP'>|null,
     *     DestinationTrafficState?: 'ALLOW'|'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
