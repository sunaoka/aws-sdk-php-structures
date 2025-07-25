<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $ResourceType
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|null $State
 */
class TransitGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
