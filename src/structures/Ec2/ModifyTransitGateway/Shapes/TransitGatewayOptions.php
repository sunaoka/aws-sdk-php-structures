<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AmazonSideAsn
 * @property list<string>|null $TransitGatewayCidrBlocks
 * @property 'enable'|'disable'|null $AutoAcceptSharedAttachments
 * @property 'enable'|'disable'|null $DefaultRouteTableAssociation
 * @property string|null $AssociationDefaultRouteTableId
 * @property 'enable'|'disable'|null $DefaultRouteTablePropagation
 * @property string|null $PropagationDefaultRouteTableId
 * @property 'enable'|'disable'|null $VpnEcmpSupport
 * @property 'enable'|'disable'|null $DnsSupport
 * @property 'enable'|'disable'|null $SecurityGroupReferencingSupport
 * @property 'enable'|'disable'|null $MulticastSupport
 */
class TransitGatewayOptions extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int|null,
     *     TransitGatewayCidrBlocks?: list<string>|null,
     *     AutoAcceptSharedAttachments?: 'enable'|'disable'|null,
     *     DefaultRouteTableAssociation?: 'enable'|'disable'|null,
     *     AssociationDefaultRouteTableId?: string|null,
     *     DefaultRouteTablePropagation?: 'enable'|'disable'|null,
     *     PropagationDefaultRouteTableId?: string|null,
     *     VpnEcmpSupport?: 'enable'|'disable'|null,
     *     DnsSupport?: 'enable'|'disable'|null,
     *     SecurityGroupReferencingSupport?: 'enable'|'disable'|null,
     *     MulticastSupport?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
