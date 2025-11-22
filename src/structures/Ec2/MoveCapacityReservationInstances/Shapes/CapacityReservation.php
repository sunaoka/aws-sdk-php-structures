<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveCapacityReservationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $OwnerId
 * @property string|null $CapacityReservationArn
 * @property string|null $AvailabilityZoneId
 * @property string|null $InstanceType
 * @property 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro'|null $InstancePlatform
 * @property string|null $AvailabilityZone
 * @property 'default'|'dedicated'|null $Tenancy
 * @property int|null $TotalInstanceCount
 * @property int|null $AvailableInstanceCount
 * @property bool|null $EbsOptimized
 * @property bool|null $EphemeralStorage
 * @property 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported'|'unavailable'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'unlimited'|'limited'|null $EndDateType
 * @property 'open'|'targeted'|null $InstanceMatchCriteria
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<Tag>|null $Tags
 * @property string|null $OutpostArn
 * @property string|null $CapacityReservationFleetId
 * @property string|null $PlacementGroupArn
 * @property list<CapacityAllocation>|null $CapacityAllocations
 * @property 'default'|'capacity-block'|null $ReservationType
 * @property string|null $UnusedReservationBillingOwnerId
 * @property CapacityReservationCommitmentInfo|null $CommitmentInfo
 * @property 'fixed'|'incremental'|null $DeliveryPreference
 * @property string|null $CapacityBlockId
 * @property bool|null $Interruptible
 * @property InterruptibleCapacityAllocation|null $InterruptibleCapacityAllocation
 * @property InterruptionInfo|null $InterruptionInfo
 */
class CapacityReservation extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     OwnerId?: string|null,
     *     CapacityReservationArn?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     InstanceType?: string|null,
     *     InstancePlatform?: 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro'|null,
     *     AvailabilityZone?: string|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     TotalInstanceCount?: int|null,
     *     AvailableInstanceCount?: int|null,
     *     EbsOptimized?: bool|null,
     *     EphemeralStorage?: bool|null,
     *     State?: 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported'|'unavailable'|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     EndDateType?: 'unlimited'|'limited'|null,
     *     InstanceMatchCriteria?: 'open'|'targeted'|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     OutpostArn?: string|null,
     *     CapacityReservationFleetId?: string|null,
     *     PlacementGroupArn?: string|null,
     *     CapacityAllocations?: list<CapacityAllocation>|null,
     *     ReservationType?: 'default'|'capacity-block'|null,
     *     UnusedReservationBillingOwnerId?: string|null,
     *     CommitmentInfo?: CapacityReservationCommitmentInfo|null,
     *     DeliveryPreference?: 'fixed'|'incremental'|null,
     *     CapacityBlockId?: string|null,
     *     Interruptible?: bool|null,
     *     InterruptibleCapacityAllocation?: InterruptibleCapacityAllocation|null,
     *     InterruptionInfo?: InterruptionInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
