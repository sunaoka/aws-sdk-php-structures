<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseCapacityBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationId
 * @property string $OwnerId
 * @property string $CapacityReservationArn
 * @property string $AvailabilityZoneId
 * @property string $InstanceType
 * @property 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro' $InstancePlatform
 * @property string $AvailabilityZone
 * @property 'default'|'dedicated' $Tenancy
 * @property int $TotalInstanceCount
 * @property int $AvailableInstanceCount
 * @property bool $EbsOptimized
 * @property bool $EphemeralStorage
 * @property 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported' $State
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'unlimited'|'limited' $EndDateType
 * @property 'open'|'targeted' $InstanceMatchCriteria
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<Tag> $Tags
 * @property string $OutpostArn
 * @property string $CapacityReservationFleetId
 * @property string $PlacementGroupArn
 * @property list<CapacityAllocation> $CapacityAllocations
 * @property 'default'|'capacity-block' $ReservationType
 * @property string $UnusedReservationBillingOwnerId
 * @property CapacityReservationCommitmentInfo $CommitmentInfo
 * @property 'fixed'|'incremental' $DeliveryPreference
 */
class CapacityReservation extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string,
     *     OwnerId?: string,
     *     CapacityReservationArn?: string,
     *     AvailabilityZoneId?: string,
     *     InstanceType?: string,
     *     InstancePlatform?: 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro',
     *     AvailabilityZone?: string,
     *     Tenancy?: 'default'|'dedicated',
     *     TotalInstanceCount?: int,
     *     AvailableInstanceCount?: int,
     *     EbsOptimized?: bool,
     *     EphemeralStorage?: bool,
     *     State?: 'active'|'expired'|'cancelled'|'pending'|'failed'|'scheduled'|'payment-pending'|'payment-failed'|'assessing'|'delayed'|'unsupported',
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     EndDateType?: 'unlimited'|'limited',
     *     InstanceMatchCriteria?: 'open'|'targeted',
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     OutpostArn?: string,
     *     CapacityReservationFleetId?: string,
     *     PlacementGroupArn?: string,
     *     CapacityAllocations?: list<CapacityAllocation>,
     *     ReservationType?: 'default'|'capacity-block',
     *     UnusedReservationBillingOwnerId?: string,
     *     CommitmentInfo?: CapacityReservationCommitmentInfo,
     *     DeliveryPreference?: 'fixed'|'incremental'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
