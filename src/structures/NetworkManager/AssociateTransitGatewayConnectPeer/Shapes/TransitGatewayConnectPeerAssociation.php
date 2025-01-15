<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateTransitGatewayConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayConnectPeerArn
 * @property string|null $GlobalNetworkId
 * @property string|null $DeviceId
 * @property string|null $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null $State
 */
class TransitGatewayConnectPeerAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayConnectPeerArn?: string|null,
     *     GlobalNetworkId?: string|null,
     *     DeviceId?: string|null,
     *     LinkId?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
