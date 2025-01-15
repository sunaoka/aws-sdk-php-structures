<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActualBlockHourlyPrice
 * @property string|null $AvailabilityZoneGroup
 * @property int|null $BlockDurationMinutes
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property SpotInstanceStateFault|null $Fault
 * @property string|null $InstanceId
 * @property string|null $LaunchGroup
 * @property LaunchSpecification|null $LaunchSpecification
 * @property string|null $LaunchedAvailabilityZone
 * @property 'Linux/UNIX'|'Linux/UNIX (Amazon VPC)'|'Windows'|'Windows (Amazon VPC)'|null $ProductDescription
 * @property string|null $SpotInstanceRequestId
 * @property string|null $SpotPrice
 * @property 'open'|'active'|'closed'|'cancelled'|'failed'|'disabled'|null $State
 * @property SpotInstanceStatus|null $Status
 * @property list<Tag>|null $Tags
 * @property 'one-time'|'persistent'|null $Type
 * @property \Aws\Api\DateTimeResult|null $ValidFrom
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 */
class SpotInstanceRequest extends Shape
{
    /**
     * @param array{
     *     ActualBlockHourlyPrice?: string|null,
     *     AvailabilityZoneGroup?: string|null,
     *     BlockDurationMinutes?: int|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     Fault?: SpotInstanceStateFault|null,
     *     InstanceId?: string|null,
     *     LaunchGroup?: string|null,
     *     LaunchSpecification?: LaunchSpecification|null,
     *     LaunchedAvailabilityZone?: string|null,
     *     ProductDescription?: 'Linux/UNIX'|'Linux/UNIX (Amazon VPC)'|'Windows'|'Windows (Amazon VPC)'|null,
     *     SpotInstanceRequestId?: string|null,
     *     SpotPrice?: string|null,
     *     State?: 'open'|'active'|'closed'|'cancelled'|'failed'|'disabled'|null,
     *     Status?: SpotInstanceStatus|null,
     *     Tags?: list<Tag>|null,
     *     Type?: 'one-time'|'persistent'|null,
     *     ValidFrom?: \Aws\Api\DateTimeResult|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
