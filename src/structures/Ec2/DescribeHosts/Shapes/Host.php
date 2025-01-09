<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeHosts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'on'|'off' $AutoPlacement
 * @property string $AvailabilityZone
 * @property AvailableCapacity $AvailableCapacity
 * @property string $ClientToken
 * @property string $HostId
 * @property HostProperties $HostProperties
 * @property string $HostReservationId
 * @property list<HostInstance> $Instances
 * @property 'available'|'under-assessment'|'permanent-failure'|'released'|'released-permanent-failure'|'pending' $State
 * @property \Aws\Api\DateTimeResult $AllocationTime
 * @property \Aws\Api\DateTimeResult $ReleaseTime
 * @property list<Tag> $Tags
 * @property 'on'|'off' $HostRecovery
 * @property 'on'|'off' $AllowsMultipleInstanceTypes
 * @property string $OwnerId
 * @property string $AvailabilityZoneId
 * @property bool $MemberOfServiceLinkedResourceGroup
 * @property string $OutpostArn
 * @property 'on'|'off' $HostMaintenance
 * @property string $AssetId
 */
class Host extends Shape
{
    /**
     * @param array{
     *     AutoPlacement?: 'on'|'off',
     *     AvailabilityZone?: string,
     *     AvailableCapacity?: AvailableCapacity,
     *     ClientToken?: string,
     *     HostId?: string,
     *     HostProperties?: HostProperties,
     *     HostReservationId?: string,
     *     Instances?: list<HostInstance>,
     *     State?: 'available'|'under-assessment'|'permanent-failure'|'released'|'released-permanent-failure'|'pending',
     *     AllocationTime?: \Aws\Api\DateTimeResult,
     *     ReleaseTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     HostRecovery?: 'on'|'off',
     *     AllowsMultipleInstanceTypes?: 'on'|'off',
     *     OwnerId?: string,
     *     AvailabilityZoneId?: string,
     *     MemberOfServiceLinkedResourceGroup?: bool,
     *     OutpostArn?: string,
     *     HostMaintenance?: 'on'|'off',
     *     AssetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
