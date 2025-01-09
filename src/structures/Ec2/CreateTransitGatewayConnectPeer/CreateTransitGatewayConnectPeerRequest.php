<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnectPeer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $TransitGatewayAddress
 * @property string $PeerAddress
 * @property Shapes\TransitGatewayConnectRequestBgpOptions $BgpOptions
 * @property list<string> $InsideCidrBlocks
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayConnectPeerRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     TransitGatewayAddress?: string,
     *     PeerAddress: string,
     *     BgpOptions?: Shapes\TransitGatewayConnectRequestBgpOptions,
     *     InsideCidrBlocks: list<string>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
