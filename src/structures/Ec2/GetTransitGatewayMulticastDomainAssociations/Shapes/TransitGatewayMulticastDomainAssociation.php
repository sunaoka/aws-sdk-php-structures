<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayMulticastDomainAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null $ResourceType
 * @property string|null $ResourceOwnerId
 * @property SubnetAssociation|null $Subnet
 */
class TransitGatewayMulticastDomainAssociation extends Shape
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|null,
     *     ResourceOwnerId?: string|null,
     *     Subnet?: SubnetAssociation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
