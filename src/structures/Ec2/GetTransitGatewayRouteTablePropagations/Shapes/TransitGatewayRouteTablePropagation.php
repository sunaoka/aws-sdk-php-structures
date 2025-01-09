<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayRouteTablePropagations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property 'enabling'|'enabled'|'disabling'|'disabled' $State
 * @property string $TransitGatewayRouteTableAnnouncementId
 */
class TransitGatewayRouteTablePropagation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled',
     *     TransitGatewayRouteTableAnnouncementId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
