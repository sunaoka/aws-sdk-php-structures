<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AddTransitGatewayCidrBlocks
 * @property list<string> $RemoveTransitGatewayCidrBlocks
 * @property 'enable'|'disable' $VpnEcmpSupport
 * @property 'enable'|'disable' $DnsSupport
 * @property 'enable'|'disable' $SecurityGroupReferencingSupport
 * @property 'enable'|'disable' $AutoAcceptSharedAttachments
 * @property 'enable'|'disable' $DefaultRouteTableAssociation
 * @property string $AssociationDefaultRouteTableId
 * @property 'enable'|'disable' $DefaultRouteTablePropagation
 * @property string $PropagationDefaultRouteTableId
 * @property int $AmazonSideAsn
 */
class ModifyTransitGatewayOptions extends Shape
{
    /**
     * @param array{
     *     AddTransitGatewayCidrBlocks?: list<string>,
     *     RemoveTransitGatewayCidrBlocks?: list<string>,
     *     VpnEcmpSupport?: 'enable'|'disable',
     *     DnsSupport?: 'enable'|'disable',
     *     SecurityGroupReferencingSupport?: 'enable'|'disable',
     *     AutoAcceptSharedAttachments?: 'enable'|'disable',
     *     DefaultRouteTableAssociation?: 'enable'|'disable',
     *     AssociationDefaultRouteTableId?: string,
     *     DefaultRouteTablePropagation?: 'enable'|'disable',
     *     PropagationDefaultRouteTableId?: string,
     *     AmazonSideAsn?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
