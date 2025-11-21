<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredResourceCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $ResourceRegion
 * @property string|null $ResourceId
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceCidr
 * @property 'amazon'|'byoip'|'none'|null $IpSource
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null $ResourceType
 * @property list<IpamResourceTag>|null $ResourceTags
 * @property double|null $IpUsage
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property 'available'|'in-use'|null $NetworkInterfaceAttachmentStatus
 * @property \Aws\Api\DateTimeResult|null $SampleTime
 * @property string|null $AvailabilityZoneId
 */
class IpamDiscoveredResourceCidr extends Shape
{
    /**
     * @param array{
     *     IpamResourceDiscoveryId?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceId?: string|null,
     *     ResourceOwnerId?: string|null,
     *     ResourceCidr?: string|null,
     *     IpSource?: 'amazon'|'byoip'|'none'|null,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null,
     *     ResourceTags?: list<IpamResourceTag>|null,
     *     IpUsage?: double|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     NetworkInterfaceAttachmentStatus?: 'available'|'in-use'|null,
     *     SampleTime?: \Aws\Api\DateTimeResult|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
