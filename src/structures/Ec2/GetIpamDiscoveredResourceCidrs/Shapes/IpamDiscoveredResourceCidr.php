<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredResourceCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $ResourceRegion
 * @property string|null $ResourceId
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceCidr
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|null $ResourceType
 * @property list<IpamResourceTag>|null $ResourceTags
 * @property double|null $IpUsage
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $SampleTime
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
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|null,
     *     ResourceTags?: list<IpamResourceTag>|null,
     *     IpUsage?: double|null,
     *     VpcId?: string|null,
     *     SampleTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
