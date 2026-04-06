<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectTransitGatewayMulticastDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayMulticastDomainId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $ResourceType
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
     *     ResourceType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     ResourceOwnerId?: string|null,
     *     Subnets?: list<SubnetAssociation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
