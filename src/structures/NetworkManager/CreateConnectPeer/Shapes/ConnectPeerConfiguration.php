<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkAddress
 * @property string $PeerAddress
 * @property list<string> $InsideCidrBlocks
 * @property 'GRE'|'NO_ENCAP' $Protocol
 * @property list<ConnectPeerBgpConfiguration> $BgpConfigurations
 */
class ConnectPeerConfiguration extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAddress?: string,
     *     PeerAddress?: string,
     *     InsideCidrBlocks?: list<string>,
     *     Protocol?: 'GRE'|'NO_ENCAP',
     *     BgpConfigurations?: list<ConnectPeerBgpConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
