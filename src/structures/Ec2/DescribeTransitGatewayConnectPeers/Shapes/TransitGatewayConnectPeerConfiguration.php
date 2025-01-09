<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAddress
 * @property string $PeerAddress
 * @property list<string> $InsideCidrBlocks
 * @property 'gre' $Protocol
 * @property list<TransitGatewayAttachmentBgpConfiguration> $BgpConfigurations
 */
class TransitGatewayConnectPeerConfiguration extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAddress?: string,
     *     PeerAddress?: string,
     *     InsideCidrBlocks?: list<string>,
     *     Protocol?: 'gre',
     *     BgpConfigurations?: list<TransitGatewayAttachmentBgpConfiguration>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
