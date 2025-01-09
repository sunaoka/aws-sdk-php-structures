<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableTransitGatewayRouteTablePropagation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $TransitGatewayRouteTableId
 * @property 'enabling'|'enabled'|'disabling'|'disabled' $State
 * @property string $TransitGatewayRouteTableAnnouncementId
 */
class TransitGatewayPropagation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     TransitGatewayRouteTableId?: string,
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled',
     *     TransitGatewayRouteTableAnnouncementId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
