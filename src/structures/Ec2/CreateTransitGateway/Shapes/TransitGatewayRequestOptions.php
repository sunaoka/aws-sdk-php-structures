<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AmazonSideAsn
 * @property 'enable'|'disable'|null $AutoAcceptSharedAttachments
 * @property 'enable'|'disable'|null $DefaultRouteTableAssociation
 * @property 'enable'|'disable'|null $DefaultRouteTablePropagation
 * @property 'enable'|'disable'|null $VpnEcmpSupport
 * @property 'enable'|'disable'|null $DnsSupport
 * @property 'enable'|'disable'|null $SecurityGroupReferencingSupport
 * @property 'enable'|'disable'|null $MulticastSupport
 * @property list<string>|null $TransitGatewayCidrBlocks
 */
class TransitGatewayRequestOptions extends Shape
{
    /**
     * @param array{
     *     AmazonSideAsn?: int|null,
     *     AutoAcceptSharedAttachments?: 'enable'|'disable'|null,
     *     DefaultRouteTableAssociation?: 'enable'|'disable'|null,
     *     DefaultRouteTablePropagation?: 'enable'|'disable'|null,
     *     VpnEcmpSupport?: 'enable'|'disable'|null,
     *     DnsSupport?: 'enable'|'disable'|null,
     *     SecurityGroupReferencingSupport?: 'enable'|'disable'|null,
     *     MulticastSupport?: 'enable'|'disable'|null,
     *     TransitGatewayCidrBlocks?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
