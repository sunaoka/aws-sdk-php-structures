<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredResourceCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpamResourceDiscoveryId
 * @property string $ResourceRegion
 * @property string $ResourceId
 * @property string $ResourceOwnerId
 * @property string $ResourceCidr
 * @property 'amazon'|'byoip'|'none' $IpSource
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni' $ResourceType
 * @property list<IpamResourceTag> $ResourceTags
 * @property double $IpUsage
 * @property string $VpcId
 * @property string $SubnetId
 * @property 'available'|'in-use' $NetworkInterfaceAttachmentStatus
 * @property \Aws\Api\DateTimeResult $SampleTime
 * @property string $AvailabilityZoneId
 */
class IpamDiscoveredResourceCidr extends Shape
{
    /**
     * @param array{
     *     IpamResourceDiscoveryId?: string,
     *     ResourceRegion?: string,
     *     ResourceId?: string,
     *     ResourceOwnerId?: string,
     *     ResourceCidr?: string,
     *     IpSource?: 'amazon'|'byoip'|'none',
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni',
     *     ResourceTags?: list<IpamResourceTag>,
     *     IpUsage?: double,
     *     VpcId?: string,
     *     SubnetId?: string,
     *     NetworkInterfaceAttachmentStatus?: 'available'|'in-use',
     *     SampleTime?: \Aws\Api\DateTimeResult,
     *     AvailabilityZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
