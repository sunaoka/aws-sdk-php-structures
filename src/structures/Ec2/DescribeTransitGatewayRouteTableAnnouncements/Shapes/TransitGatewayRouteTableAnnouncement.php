<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTableAnnouncements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableAnnouncementId
 * @property string|null $TransitGatewayId
 * @property string|null $CoreNetworkId
 * @property string|null $PeerTransitGatewayId
 * @property string|null $PeerCoreNetworkId
 * @property string|null $PeeringAttachmentId
 * @property 'outgoing'|'incoming'|null $AnnouncementDirection
 * @property string|null $TransitGatewayRouteTableId
 * @property 'available'|'pending'|'failing'|'failed'|'deleting'|'deleted'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayRouteTableAnnouncement extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableAnnouncementId?: string|null,
     *     TransitGatewayId?: string|null,
     *     CoreNetworkId?: string|null,
     *     PeerTransitGatewayId?: string|null,
     *     PeerCoreNetworkId?: string|null,
     *     PeeringAttachmentId?: string|null,
     *     AnnouncementDirection?: 'outgoing'|'incoming'|null,
     *     TransitGatewayRouteTableId?: string|null,
     *     State?: 'available'|'pending'|'failing'|'failed'|'deleting'|'deleted'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
