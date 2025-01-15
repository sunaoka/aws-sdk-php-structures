<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CoreNetworkAsn
 * @property int|null $PeerAsn
 * @property string|null $CoreNetworkAddress
 * @property string|null $PeerAddress
 */
class ConnectPeerBgpConfiguration extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAsn?: int|null,
     *     PeerAsn?: int|null,
     *     CoreNetworkAddress?: string|null,
     *     PeerAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
