<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PeerAsn
 * @property 'bfd'|'bgp-keepalive'|null $PeerLivenessDetection
 */
class RouteServerBgpOptionsRequest extends Shape
{
    /**
     * @param array{
     *     PeerAsn: int,
     *     PeerLivenessDetection?: 'bfd'|'bgp-keepalive'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
