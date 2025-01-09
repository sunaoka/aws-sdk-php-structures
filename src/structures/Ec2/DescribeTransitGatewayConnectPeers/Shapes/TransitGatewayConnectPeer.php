<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnectPeers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $TransitGatewayConnectPeerId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property TransitGatewayConnectPeerConfiguration $ConnectPeerConfiguration
 * @property list<Tag> $Tags
 */
class TransitGatewayConnectPeer extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     TransitGatewayConnectPeerId?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     ConnectPeerConfiguration?: TransitGatewayConnectPeerConfiguration,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
