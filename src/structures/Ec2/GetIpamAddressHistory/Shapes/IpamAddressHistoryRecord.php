<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamAddressHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceOwnerId
 * @property string $ResourceRegion
 * @property 'eip'|'vpc'|'subnet'|'network-interface'|'instance' $ResourceType
 * @property string $ResourceId
 * @property string $ResourceCidr
 * @property string $ResourceName
 * @property 'compliant'|'noncompliant'|'unmanaged'|'ignored' $ResourceComplianceStatus
 * @property 'overlapping'|'nonoverlapping'|'ignored' $ResourceOverlapStatus
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $SampledStartTime
 * @property \Aws\Api\DateTimeResult $SampledEndTime
 */
class IpamAddressHistoryRecord extends Shape
{
    /**
     * @param array{
     *     ResourceOwnerId?: string,
     *     ResourceRegion?: string,
     *     ResourceType?: 'eip'|'vpc'|'subnet'|'network-interface'|'instance',
     *     ResourceId?: string,
     *     ResourceCidr?: string,
     *     ResourceName?: string,
     *     ResourceComplianceStatus?: 'compliant'|'noncompliant'|'unmanaged'|'ignored',
     *     ResourceOverlapStatus?: 'overlapping'|'nonoverlapping'|'ignored',
     *     VpcId?: string,
     *     SampledStartTime?: \Aws\Api\DateTimeResult,
     *     SampledEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
