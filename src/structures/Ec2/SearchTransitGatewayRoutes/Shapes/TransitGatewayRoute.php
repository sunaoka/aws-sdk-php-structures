<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidrBlock
 * @property string|null $PrefixListId
 * @property string|null $TransitGatewayRouteTableAnnouncementId
 * @property list<TransitGatewayRouteAttachment>|null $TransitGatewayAttachments
 * @property 'static'|'propagated'|null $Type
 * @property 'pending'|'active'|'blackhole'|'deleting'|'deleted'|null $State
 */
class TransitGatewayRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     PrefixListId?: string|null,
     *     TransitGatewayRouteTableAnnouncementId?: string|null,
     *     TransitGatewayAttachments?: list<TransitGatewayRouteAttachment>|null,
     *     Type?: 'static'|'propagated'|null,
     *     State?: 'pending'|'active'|'blackhole'|'deleting'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
