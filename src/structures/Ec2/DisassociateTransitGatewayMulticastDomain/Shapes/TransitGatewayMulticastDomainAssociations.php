<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayMulticastDomainId
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $ResourceOwnerId
 * @property list<SubnetAssociation> $Subnets
 */
class TransitGatewayMulticastDomainAssociations extends Shape
{
    /**
     * @param array{
     *     TransitGatewayMulticastDomainId?: string,
     *     TransitGatewayAttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     ResourceOwnerId?: string,
     *     Subnets?: list<SubnetAssociation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
