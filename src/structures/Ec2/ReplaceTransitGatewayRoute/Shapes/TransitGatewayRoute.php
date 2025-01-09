<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceTransitGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property string $PrefixListId
 * @property string $TransitGatewayRouteTableAnnouncementId
 * @property list<TransitGatewayRouteAttachment> $TransitGatewayAttachments
 * @property 'static'|'propagated' $Type
 * @property 'pending'|'active'|'blackhole'|'deleting'|'deleted' $State
 */
class TransitGatewayRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     PrefixListId?: string,
     *     TransitGatewayRouteTableAnnouncementId?: string,
     *     TransitGatewayAttachments?: list<TransitGatewayRouteAttachment>,
     *     Type?: 'static'|'propagated',
     *     State?: 'pending'|'active'|'blackhole'|'deleting'|'deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
