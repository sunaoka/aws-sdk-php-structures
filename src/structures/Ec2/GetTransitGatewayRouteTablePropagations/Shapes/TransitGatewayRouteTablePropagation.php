<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayRouteTablePropagations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null $ResourceType
 * @property 'enabling'|'enabled'|'disabling'|'disabled'|null $State
 * @property string|null $TransitGatewayRouteTableAnnouncementId
 */
class TransitGatewayRouteTablePropagation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null,
     *     State?: 'enabling'|'enabled'|'disabling'|'disabled'|null,
     *     TransitGatewayRouteTableAnnouncementId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
