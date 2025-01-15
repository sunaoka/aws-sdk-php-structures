<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'on'|'off'|null $AutoPlacement
 * @property string|null $AvailabilityZone
 * @property AvailableCapacity|null $AvailableCapacity
 * @property string|null $ClientToken
 * @property string|null $HostId
 * @property HostProperties|null $HostProperties
 * @property string|null $HostReservationId
 * @property list<HostInstance>|null $Instances
 * @property 'available'|'under-assessment'|'permanent-failure'|'released'|'released-permanent-failure'|'pending'|null $State
 * @property \Aws\Api\DateTimeResult|null $AllocationTime
 * @property \Aws\Api\DateTimeResult|null $ReleaseTime
 * @property list<Tag>|null $Tags
 * @property 'on'|'off'|null $HostRecovery
 * @property 'on'|'off'|null $AllowsMultipleInstanceTypes
 * @property string|null $OwnerId
 * @property string|null $AvailabilityZoneId
 * @property bool|null $MemberOfServiceLinkedResourceGroup
 * @property string|null $OutpostArn
 * @property 'on'|'off'|null $HostMaintenance
 * @property string|null $AssetId
 */
class Host extends Shape
{
    /**
     * @param array{
     *     AutoPlacement?: 'on'|'off'|null,
     *     AvailabilityZone?: string|null,
     *     AvailableCapacity?: AvailableCapacity|null,
     *     ClientToken?: string|null,
     *     HostId?: string|null,
     *     HostProperties?: HostProperties|null,
     *     HostReservationId?: string|null,
     *     Instances?: list<HostInstance>|null,
     *     State?: 'available'|'under-assessment'|'permanent-failure'|'released'|'released-permanent-failure'|'pending'|null,
     *     AllocationTime?: \Aws\Api\DateTimeResult|null,
     *     ReleaseTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     HostRecovery?: 'on'|'off'|null,
     *     AllowsMultipleInstanceTypes?: 'on'|'off'|null,
     *     OwnerId?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     MemberOfServiceLinkedResourceGroup?: bool|null,
     *     OutpostArn?: string|null,
     *     HostMaintenance?: 'on'|'off'|null,
     *     AssetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
