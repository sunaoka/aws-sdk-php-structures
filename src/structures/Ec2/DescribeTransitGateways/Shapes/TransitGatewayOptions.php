<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AmazonSideAsn
 * @property list<string> $TransitGatewayCidrBlocks
 * @property 'enable'|'disable' $AutoAcceptSharedAttachments
 * @property 'enable'|'disable' $DefaultRouteTableAssociation
 * @property string $AssociationDefaultRouteTableId
 * @property 'enable'|'disable' $DefaultRouteTablePropagation
 * @property string $PropagationDefaultRouteTableId
 * @property 'enable'|'disable' $VpnEcmpSupport
 * @property 'enable'|'disable' $DnsSupport
 * @property 'enable'|'disable' $SecurityGroupReferencingSupport
 * @property 'enable'|'disable' $MulticastSupport
 */
class TransitGatewayOptions extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int,
     *     TransitGatewayCidrBlocks?: list<string>,
     *     AutoAcceptSharedAttachments?: 'enable'|'disable',
     *     DefaultRouteTableAssociation?: 'enable'|'disable',
     *     AssociationDefaultRouteTableId?: string,
     *     DefaultRouteTablePropagation?: 'enable'|'disable',
     *     PropagationDefaultRouteTableId?: string,
     *     VpnEcmpSupport?: 'enable'|'disable',
     *     DnsSupport?: 'enable'|'disable',
     *     SecurityGroupReferencingSupport?: 'enable'|'disable',
     *     MulticastSupport?: 'enable'|'disable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
