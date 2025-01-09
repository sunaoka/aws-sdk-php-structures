<?php

namespace Sunaoka\Aws\Structures\Ec2\SearchTransitGatewayMulticastGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupIpAddress
 * @property string $TransitGatewayAttachmentId
 * @property string $SubnetId
 * @property string $ResourceId
 * @property 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering' $ResourceType
 * @property string $ResourceOwnerId
 * @property string $NetworkInterfaceId
 * @property bool $GroupMember
 * @property bool $GroupSource
 * @property 'static'|'igmp' $MemberType
 * @property 'static'|'igmp' $SourceType
 */
class TransitGatewayMulticastGroup extends Shape
{
    /**
     * @param array{
     *     GroupIpAddress?: string,
     *     TransitGatewayAttachmentId?: string,
     *     SubnetId?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'vpc'|'vpn'|'direct-connect-gateway'|'connect'|'peering'|'tgw-peering',
     *     ResourceOwnerId?: string,
     *     NetworkInterfaceId?: string,
     *     GroupMember?: bool,
     *     GroupSource?: bool,
     *     MemberType?: 'static'|'igmp',
     *     SourceType?: 'static'|'igmp'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
