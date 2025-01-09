<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayPolicyTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property 'associating'|'associated'|'disassociating'|'disassociated' $State
 */
class TransitGatewayPolicyTableAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId?: string,
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
