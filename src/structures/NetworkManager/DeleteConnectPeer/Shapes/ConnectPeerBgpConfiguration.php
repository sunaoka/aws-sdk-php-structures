<?php

namespace Sunaoka\Aws\Structures\NetworkManager\DeleteConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoreNetworkAsn
 * @property int $PeerAsn
 * @property string $CoreNetworkAddress
 * @property string $PeerAddress
 */
class ConnectPeerBgpConfiguration extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAsn?: int,
     *     PeerAsn?: int,
     *     CoreNetworkAddress?: string,
     *     PeerAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
