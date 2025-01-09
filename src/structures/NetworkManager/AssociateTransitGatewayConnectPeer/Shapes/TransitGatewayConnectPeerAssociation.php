<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateTransitGatewayConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayConnectPeerArn
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED' $State
 */
class TransitGatewayConnectPeerAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayConnectPeerArn?: string,
     *     GlobalNetworkId?: string,
     *     DeviceId?: string,
     *     LinkId?: string,
     *     State?: 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
