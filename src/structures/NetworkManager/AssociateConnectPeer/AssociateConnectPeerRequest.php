<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AssociateConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ConnectPeerId
 * @property string $DeviceId
 * @property string $LinkId
 */
class AssociateConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectPeerId: string,
     *     DeviceId: string,
     *     LinkId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
