<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectPeerId
 * @property string $GlobalNetworkId
 * @property string $DeviceId
 * @property string $LinkId
 * @property 'PENDING'|'AVAILABLE'|'DELETING'|'DELETED' $State
 */
class ConnectPeerAssociation extends Shape
{
    /**
     * @param array{
     *     ConnectPeerId?: string,
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
