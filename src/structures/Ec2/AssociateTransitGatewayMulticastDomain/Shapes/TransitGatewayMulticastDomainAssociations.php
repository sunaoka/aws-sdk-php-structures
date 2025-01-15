<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null $ResourceType
 * @property string|null $ResourceOwnerId
 * @property list<SubnetAssociation>|null $Subnets
 */
class TransitGatewayMulticastDomainAssociations extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null,
     *     ResourceOwnerId?: string|null,
     *     Subnets?: list<SubnetAssociation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
