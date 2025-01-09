<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Description
 * @property string $DefaultRouteTablePropagation
 * @property string $AutoAcceptSharedAttachments
 * @property string $DefaultRouteTableAssociation
 * @property list<string> $TransitGatewayCidrBlocks
 * @property string $AssociationDefaultRouteTableId
 * @property string $PropagationDefaultRouteTableId
 * @property string $VpnEcmpSupport
 * @property string $DnsSupport
 * @property string $MulticastSupport
 * @property int $AmazonSideAsn
 */
class AwsEc2TransitGatewayDetails extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Description?: string,
     *     DefaultRouteTablePropagation?: string,
     *     AutoAcceptSharedAttachments?: string,
     *     DefaultRouteTableAssociation?: string,
     *     TransitGatewayCidrBlocks?: list<string>,
     *     AssociationDefaultRouteTableId?: string,
     *     PropagationDefaultRouteTableId?: string,
     *     VpnEcmpSupport?: string,
     *     DnsSupport?: string,
     *     MulticastSupport?: string,
     *     AmazonSideAsn?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
