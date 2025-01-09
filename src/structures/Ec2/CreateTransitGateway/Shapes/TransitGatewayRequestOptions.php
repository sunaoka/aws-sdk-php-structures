<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AmazonSideAsn
 * @property 'enable'|'disable' $AutoAcceptSharedAttachments
 * @property 'enable'|'disable' $DefaultRouteTableAssociation
 * @property 'enable'|'disable' $DefaultRouteTablePropagation
 * @property 'enable'|'disable' $VpnEcmpSupport
 * @property 'enable'|'disable' $DnsSupport
 * @property 'enable'|'disable' $SecurityGroupReferencingSupport
 * @property 'enable'|'disable' $MulticastSupport
 * @property list<string> $TransitGatewayCidrBlocks
 */
class TransitGatewayRequestOptions extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int,
     *     AutoAcceptSharedAttachments?: 'enable'|'disable',
     *     DefaultRouteTableAssociation?: 'enable'|'disable',
     *     DefaultRouteTablePropagation?: 'enable'|'disable',
     *     VpnEcmpSupport?: 'enable'|'disable',
     *     DnsSupport?: 'enable'|'disable',
     *     SecurityGroupReferencingSupport?: 'enable'|'disable',
     *     MulticastSupport?: 'enable'|'disable',
     *     TransitGatewayCidrBlocks?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
