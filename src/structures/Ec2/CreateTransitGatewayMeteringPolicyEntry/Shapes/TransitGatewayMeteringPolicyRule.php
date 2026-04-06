<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMeteringPolicyEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceTransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $SourceTransitGatewayAttachmentType
 * @property string|null $SourceCidrBlock
 * @property string|null $SourcePortRange
 * @property string|null $DestinationTransitGatewayAttachmentId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $DestinationTransitGatewayAttachmentType
 * @property string|null $DestinationCidrBlock
 * @property string|null $DestinationPortRange
 * @property string|null $Protocol
 */
class TransitGatewayMeteringPolicyRule extends Shape
{
    /**
     * @param array{
     *     SourceTransitGatewayAttachmentId?: string|null,
     *     SourceTransitGatewayAttachmentType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     SourceCidrBlock?: string|null,
     *     SourcePortRange?: string|null,
     *     DestinationTransitGatewayAttachmentId?: string|null,
     *     DestinationTransitGatewayAttachmentType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     DestinationCidrBlock?: string|null,
     *     DestinationPortRange?: string|null,
     *     Protocol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
