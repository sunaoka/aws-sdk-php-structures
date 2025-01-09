<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTableAnnouncement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableAnnouncementId
 * @property string $TransitGatewayId
 * @property string $CoreNetworkId
 * @property string $PeerTransitGatewayId
 * @property string $PeerCoreNetworkId
 * @property string $PeeringAttachmentId
 * @property 'outgoing'|'incoming' $AnnouncementDirection
 * @property string $TransitGatewayRouteTableId
 * @property 'available'|'pending'|'failing'|'failed'|'deleting'|'deleted' $State
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayRouteTableAnnouncement extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableAnnouncementId?: string,
     *     TransitGatewayId?: string,
     *     CoreNetworkId?: string,
     *     PeerTransitGatewayId?: string,
     *     PeerCoreNetworkId?: string,
     *     PeeringAttachmentId?: string,
     *     AnnouncementDirection?: 'outgoing'|'incoming',
     *     TransitGatewayRouteTableId?: string,
     *     State?: 'available'|'pending'|'failing'|'failed'|'deleting'|'deleted',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
