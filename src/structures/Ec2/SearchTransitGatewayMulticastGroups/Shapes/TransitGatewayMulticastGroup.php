<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayMulticastGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupIpAddress
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $SubnetId
 * @property string|null $ResourceId
 * @property 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null $ResourceType
 * @property string|null $ResourceOwnerId
 * @property string|null $NetworkInterfaceId
 * @property bool|null $GroupMember
 * @property bool|null $GroupSource
 * @property 'static'|'igmp'|null $MemberType
 * @property 'static'|'igmp'|null $SourceType
 */
class TransitGatewayMulticastGroup extends Shape
{
    /**
     * @param array{
     *     GroupIpAddress?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     SubnetId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'vpc'|'vpn'|'vpn-concentrator'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering'|'network-function'|null,
     *     ResourceOwnerId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     GroupMember?: bool|null,
     *     GroupSource?: bool|null,
     *     MemberType?: 'static'|'igmp'|null,
     *     SourceType?: 'static'|'igmp'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
