<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayAddress
 * @property string $PeerAddress
 * @property Shapes\TransitGatewayConnectRequestBgpOptions|null $BgpOptions
 * @property list<string> $InsideCidrBlocks
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     TransitGatewayAddress?: string|null,
     *     PeerAddress: string,
     *     BgpOptions?: Shapes\TransitGatewayConnectRequestBgpOptions|null,
     *     InsideCidrBlocks: list<string>,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
