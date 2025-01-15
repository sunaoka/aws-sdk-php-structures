<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $TransitGatewayConnectPeerArn
 * @property string $DeviceId
 * @property string|null $LinkId
 */
class AssociateTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     TransitGatewayConnectPeerArn: string,
     *     DeviceId: string,
     *     LinkId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
