<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AddTransitGatewayCidrBlocks
 * @property list<string>|null $RemoveTransitGatewayCidrBlocks
 * @property 'enable'|'disable'|null $VpnEcmpSupport
 * @property 'enable'|'disable'|null $DnsSupport
 * @property 'enable'|'disable'|null $SecurityGroupReferencingSupport
 * @property 'enable'|'disable'|null $AutoAcceptSharedAttachments
 * @property 'enable'|'disable'|null $DefaultRouteTableAssociation
 * @property string|null $AssociationDefaultRouteTableId
 * @property 'enable'|'disable'|null $DefaultRouteTablePropagation
 * @property string|null $PropagationDefaultRouteTableId
 * @property int|null $AmazonSideAsn
 * @property 'enable'|'disable'|null $EncryptionSupport
 */
class ModifyTransitGatewayOptions extends Shape
{
    /**
     * @param array{
     *     AddTransitGatewayCidrBlocks?: list<string>|null,
     *     RemoveTransitGatewayCidrBlocks?: list<string>|null,
     *     VpnEcmpSupport?: 'enable'|'disable'|null,
     *     DnsSupport?: 'enable'|'disable'|null,
     *     SecurityGroupReferencingSupport?: 'enable'|'disable'|null,
     *     AutoAcceptSharedAttachments?: 'enable'|'disable'|null,
     *     DefaultRouteTableAssociation?: 'enable'|'disable'|null,
     *     AssociationDefaultRouteTableId?: string|null,
     *     DefaultRouteTablePropagation?: 'enable'|'disable'|null,
     *     PropagationDefaultRouteTableId?: string|null,
     *     AmazonSideAsn?: int|null,
     *     EncryptionSupport?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
