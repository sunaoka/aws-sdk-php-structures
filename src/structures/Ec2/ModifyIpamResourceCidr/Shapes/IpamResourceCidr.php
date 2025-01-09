<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpamId
 * @property string $IpamScopeId
 * @property string $IpamPoolId
 * @property string $ResourceRegion
 * @property string $ResourceOwnerId
 * @property string $ResourceId
 * @property string $ResourceName
 * @property string $ResourceCidr
 * @property 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni' $ResourceType
 * @property list<IpamResourceTag> $ResourceTags
 * @property double $IpUsage
 * @property 'compliant'|'noncompliant'|'unmanaged'|'ignored' $ComplianceStatus
 * @property 'managed'|'unmanaged'|'ignored' $ManagementState
 * @property 'overlapping'|'nonoverlapping'|'ignored' $OverlapStatus
 * @property string $VpcId
 * @property string $AvailabilityZoneId
 */
class IpamResourceCidr extends Shape
{
    /**
     * @param array{
     *     IpamId?: string,
     *     IpamScopeId?: string,
     *     IpamPoolId?: string,
     *     ResourceRegion?: string,
     *     ResourceOwnerId?: string,
     *     ResourceId?: string,
     *     ResourceName?: string,
     *     ResourceCidr?: string,
     *     ResourceType?: 'vpc'|'subnet'|'eip'|'public-ipv4-pool'|'ipv6-pool'|'eni',
     *     ResourceTags?: list<IpamResourceTag>,
     *     IpUsage?: double,
     *     ComplianceStatus?: 'compliant'|'noncompliant'|'unmanaged'|'ignored',
     *     ManagementState?: 'managed'|'unmanaged'|'ignored',
     *     OverlapStatus?: 'overlapping'|'nonoverlapping'|'ignored',
     *     VpcId?: string,
     *     AvailabilityZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
