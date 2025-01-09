<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectAttachmentId
 * @property string $CoreNetworkAddress
 * @property string $PeerAddress
 * @property Shapes\BgpOptions $BgpOptions
 * @property list<string> $InsideCidrBlocks
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 * @property string $SubnetArn
 */
class CreateConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     ConnectAttachmentId: string,
     *     CoreNetworkAddress?: string,
     *     PeerAddress: string,
     *     BgpOptions?: Shapes\BgpOptions,
     *     InsideCidrBlocks?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string,
     *     SubnetArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
