<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerPeerId
 * @property string|null $RouteServerEndpointId
 * @property string|null $RouteServerId
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property 'pending'|'available'|'deleting'|'deleted'|'failing'|'failed'|null $State
 * @property string|null $FailureReason
 * @property string|null $EndpointEniId
 * @property string|null $EndpointEniAddress
 * @property string|null $PeerAddress
 * @property RouteServerBgpOptions|null $BgpOptions
 * @property RouteServerBgpStatus|null $BgpStatus
 * @property RouteServerBfdStatus|null $BfdStatus
 * @property list<Tag>|null $Tags
 */
class RouteServerPeer extends Shape
{
    /**
     * @param array{
     *     RouteServerPeerId?: string|null,
     *     RouteServerEndpointId?: string|null,
     *     RouteServerId?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|'failing'|'failed'|null,
     *     FailureReason?: string|null,
     *     EndpointEniId?: string|null,
     *     EndpointEniAddress?: string|null,
     *     PeerAddress?: string|null,
     *     BgpOptions?: RouteServerBgpOptions|null,
     *     BgpStatus?: RouteServerBgpStatus|null,
     *     BfdStatus?: RouteServerBfdStatus|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
