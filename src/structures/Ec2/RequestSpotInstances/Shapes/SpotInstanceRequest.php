<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActualBlockHourlyPrice
 * @property string $AvailabilityZoneGroup
 * @property int $BlockDurationMinutes
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property SpotInstanceStateFault $Fault
 * @property string $InstanceId
 * @property string $LaunchGroup
 * @property LaunchSpecification $LaunchSpecification
 * @property string $LaunchedAvailabilityZone
 * @property 'Linux/UNIX'|'Linux/UNIX (Amazon VPC)'|'Windows'|'Windows (Amazon VPC)' $ProductDescription
 * @property string $SpotInstanceRequestId
 * @property string $SpotPrice
 * @property 'open'|'active'|'closed'|'cancelled'|'failed'|'disabled' $State
 * @property SpotInstanceStatus $Status
 * @property list<Tag> $Tags
 * @property 'one-time'|'persistent' $Type
 * @property \Aws\Api\DateTimeResult $ValidFrom
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property 'hibernate'|'stop'|'terminate' $InstanceInterruptionBehavior
 */
class SpotInstanceRequest extends Shape
{
    /**
     * @param array{
     *     ActualBlockHourlyPrice?: string,
     *     AvailabilityZoneGroup?: string,
     *     BlockDurationMinutes?: int,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     Fault?: SpotInstanceStateFault,
     *     InstanceId?: string,
     *     LaunchGroup?: string,
     *     LaunchSpecification?: LaunchSpecification,
     *     LaunchedAvailabilityZone?: string,
     *     ProductDescription?: 'Linux/UNIX'|'Linux/UNIX (Amazon VPC)'|'Windows'|'Windows (Amazon VPC)',
     *     SpotInstanceRequestId?: string,
     *     SpotPrice?: string,
     *     State?: 'open'|'active'|'closed'|'cancelled'|'failed'|'disabled',
     *     Status?: SpotInstanceStatus,
     *     Tags?: list<Tag>,
     *     Type?: 'one-time'|'persistent',
     *     ValidFrom?: \Aws\Api\DateTimeResult,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
