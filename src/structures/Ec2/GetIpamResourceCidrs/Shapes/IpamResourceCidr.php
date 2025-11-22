<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamResourceCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamId
 * @property string|null $IpamScopeId
 * @property string|null $IpamPoolId
 * @property string|null $ResourceRegion
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceId
 * @property string|null $ResourceName
 * @property string|null $ResourceCidr
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null $ResourceType
 * @property list<IpamResourceTag>|null $ResourceTags
 * @property double|null $IpUsage
 * @property 'compliant'|'noncompliant'|'unmanaged'|'ignored'|null $ComplianceStatus
 * @property 'managed'|'unmanaged'|'ignored'|null $ManagementState
 * @property 'overlapping'|'nonoverlapping'|'ignored'|null $OverlapStatus
 * @property string|null $VpcId
 * @property string|null $AvailabilityZoneId
 */
class IpamResourceCidr extends Shape
{
    /**
     * @param array{
     *     IpamId?: string|null,
     *     IpamScopeId?: string|null,
     *     IpamPoolId?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceOwnerId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceName?: string|null,
     *     ResourceCidr?: string|null,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni'|'anycast-ip-list'|null,
     *     ResourceTags?: list<IpamResourceTag>|null,
     *     IpUsage?: double|null,
     *     ComplianceStatus?: 'compliant'|'noncompliant'|'unmanaged'|'ignored'|null,
     *     ManagementState?: 'managed'|'unmanaged'|'ignored'|null,
     *     OverlapStatus?: 'overlapping'|'nonoverlapping'|'ignored'|null,
     *     VpcId?: string|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
