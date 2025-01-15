<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Description
 * @property string|null $DefaultRouteTablePropagation
 * @property string|null $AutoAcceptSharedAttachments
 * @property string|null $DefaultRouteTableAssociation
 * @property list<string>|null $TransitGatewayCidrBlocks
 * @property string|null $AssociationDefaultRouteTableId
 * @property string|null $PropagationDefaultRouteTableId
 * @property string|null $VpnEcmpSupport
 * @property string|null $DnsSupport
 * @property string|null $MulticastSupport
 * @property int|null $AmazonSideAsn
 */
class AwsEc2TransitGatewayDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Description?: string|null,
     *     DefaultRouteTablePropagation?: string|null,
     *     AutoAcceptSharedAttachments?: string|null,
     *     DefaultRouteTableAssociation?: string|null,
     *     TransitGatewayCidrBlocks?: list<string>|null,
     *     AssociationDefaultRouteTableId?: string|null,
     *     PropagationDefaultRouteTableId?: string|null,
     *     VpnEcmpSupport?: string|null,
     *     DnsSupport?: string|null,
     *     MulticastSupport?: string|null,
     *     AmazonSideAsn?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
