<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayConnectPeer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TransitGatewayAsn
 * @property int|null $PeerAsn
 * @property string|null $TransitGatewayAddress
 * @property string|null $PeerAddress
 * @property 'up'|'down'|null $BgpStatus
 */
class TransitGatewayAttachmentBgpConfiguration extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAsn?: int|null,
     *     PeerAsn?: int|null,
     *     TransitGatewayAddress?: string|null,
     *     PeerAddress?: string|null,
     *     BgpStatus?: 'up'|'down'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
