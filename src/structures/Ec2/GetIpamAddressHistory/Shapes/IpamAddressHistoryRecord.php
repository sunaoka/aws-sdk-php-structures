<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamAddressHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceOwnerId
 * @property string|null $ResourceRegion
 * @property 'eip'|'vpc'|'subnet'|'network-interface'|'instance'|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $ResourceCidr
 * @property string|null $ResourceName
 * @property 'compliant'|'noncompliant'|'unmanaged'|'ignored'|null $ResourceComplianceStatus
 * @property 'overlapping'|'nonoverlapping'|'ignored'|null $ResourceOverlapStatus
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $SampledStartTime
 * @property \Aws\Api\DateTimeResult|null $SampledEndTime
 */
class IpamAddressHistoryRecord extends Shape
{
    /**
     * @param array{
     *     ResourceOwnerId?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceType?: 'eip'|'vpc'|'subnet'|'network-interface'|'instance'|null,
     *     ResourceId?: string|null,
     *     ResourceCidr?: string|null,
     *     ResourceName?: string|null,
     *     ResourceComplianceStatus?: 'compliant'|'noncompliant'|'unmanaged'|'ignored'|null,
     *     ResourceOverlapStatus?: 'overlapping'|'nonoverlapping'|'ignored'|null,
     *     VpcId?: string|null,
     *     SampledStartTime?: \Aws\Api\DateTimeResult|null,
     *     SampledEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
