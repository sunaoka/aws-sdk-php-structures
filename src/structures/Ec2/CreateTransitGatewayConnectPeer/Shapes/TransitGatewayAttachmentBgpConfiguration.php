<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TransitGatewayAsn
 * @property int $PeerAsn
 * @property string $TransitGatewayAddress
 * @property string $PeerAddress
 * @property 'up'|'down' $BgpStatus
 */
class TransitGatewayAttachmentBgpConfiguration extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAsn?: int,
     *     PeerAsn?: int,
     *     TransitGatewayAddress?: string,
     *     PeerAddress?: string,
     *     BgpStatus?: 'up'|'down'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
