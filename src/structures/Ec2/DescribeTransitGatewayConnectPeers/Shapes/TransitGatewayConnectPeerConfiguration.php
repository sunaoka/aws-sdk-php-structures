<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAddress
 * @property string|null $PeerAddress
 * @property list<string>|null $InsideCidrBlocks
 * @property 'gre'|null $Protocol
 * @property list<TransitGatewayAttachmentBgpConfiguration>|null $BgpConfigurations
 */
class TransitGatewayConnectPeerConfiguration extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAddress?: string|null,
     *     PeerAddress?: string|null,
     *     InsideCidrBlocks?: list<string>|null,
     *     Protocol?: 'gre'|null,
     *     BgpConfigurations?: list<TransitGatewayAttachmentBgpConfiguration>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
