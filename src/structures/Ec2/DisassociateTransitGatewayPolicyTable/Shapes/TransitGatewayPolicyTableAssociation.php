<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayPolicyTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayPolicyTableId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null $ResourceType
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|null $State
 */
class TransitGatewayPolicyTableAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null,
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
