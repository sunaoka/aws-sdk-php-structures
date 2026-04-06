<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectAttachmentId
 * @property string|null $CoreNetworkAddress
 * @property string $PeerAddress
 * @property Shapes\BgpOptions|null $BgpOptions
 * @property list<string>|null $InsideCidrBlocks
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 * @property string|null $SubnetArn
 */
class CreateConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     ConnectAttachmentId: string,
     *     CoreNetworkAddress?: string|null,
     *     PeerAddress: string,
     *     BgpOptions?: Shapes\BgpOptions|null,
     *     InsideCidrBlocks?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null,
     *     SubnetArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
