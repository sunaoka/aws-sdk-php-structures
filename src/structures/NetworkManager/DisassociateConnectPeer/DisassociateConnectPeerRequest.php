<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DisassociateConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ConnectPeerId
 */
class DisassociateConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ConnectPeerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
