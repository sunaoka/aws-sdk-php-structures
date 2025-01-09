<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property 'associating'|'associated'|'disassociating'|'disassociated' $State
 */
class TransitGatewayAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string,
     *     TransitGatewayAttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
