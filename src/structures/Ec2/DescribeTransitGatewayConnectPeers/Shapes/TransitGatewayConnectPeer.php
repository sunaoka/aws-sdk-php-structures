<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $TransitGatewayConnectPeerId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property TransitGatewayConnectPeerConfiguration|null $ConnectPeerConfiguration
 * @property list<Tag>|null $Tags
 */
class TransitGatewayConnectPeer extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     TransitGatewayConnectPeerId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     ConnectPeerConfiguration?: TransitGatewayConnectPeerConfiguration|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
