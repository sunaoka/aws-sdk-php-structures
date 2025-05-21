<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $PeerAsn
 * @property 'bfd'|'bgp-keepalive'|null $PeerLivenessDetection
 */
class RouteServerBgpOptions extends Shape
{
    /**
     * @param array{
     *     PeerAsn?: int|null,
     *     PeerLivenessDetection?: 'bfd'|'bgp-keepalive'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
