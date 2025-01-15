<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkAddress
 * @property string|null $PeerAddress
 * @property list<string>|null $InsideCidrBlocks
 * @property 'GRE'|'NO_ENCAP'|null $Protocol
 * @property list<ConnectPeerBgpConfiguration>|null $BgpConfigurations
 */
class ConnectPeerConfiguration extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAddress?: string|null,
     *     PeerAddress?: string|null,
     *     InsideCidrBlocks?: list<string>|null,
     *     Protocol?: 'GRE'|'NO_ENCAP'|null,
     *     BgpConfigurations?: list<ConnectPeerBgpConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
