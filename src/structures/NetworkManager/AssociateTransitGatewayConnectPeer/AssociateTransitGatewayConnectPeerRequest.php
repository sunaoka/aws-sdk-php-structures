<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayConnectPeerArn
 * @property string $DeviceId
 * @property string $LinkId
 */
class AssociateTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayConnectPeerArn: string,
     *     DeviceId: string,
     *     LinkId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
