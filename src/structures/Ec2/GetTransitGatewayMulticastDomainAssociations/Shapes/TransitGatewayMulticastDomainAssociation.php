<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayMulticastDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayAttachmentId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $ResourceOwnerId
 * @property SubnetAssociation $Subnet
 */
class TransitGatewayMulticastDomainAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     ResourceOwnerId?: string,
     *     Subnet?: SubnetAssociation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
