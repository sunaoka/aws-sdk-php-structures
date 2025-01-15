<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $InstanceType
 * @property 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro' $InstancePlatform
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property 'default'|'dedicated'|null $Tenancy
 * @property int $InstanceCount
 * @property bool|null $EbsOptimized
 * @property bool|null $EphemeralStorage
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property 'unlimited'|'limited'|null $EndDateType
 * @property 'open'|'targeted'|null $InstanceMatchCriteria
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string|null $OutpostArn
 * @property string|null $PlacementGroupArn
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property int<1, 200000000>|null $CommitmentDuration
 * @property 'fixed'|'incremental'|null $DeliveryPreference
 */
class CreateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InstanceType: string,
     *     InstancePlatform: 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro',
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Tenancy?: 'default'|'dedicated'|null,
     *     InstanceCount: int,
     *     EbsOptimized?: bool|null,
     *     EphemeralStorage?: bool|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     EndDateType?: 'unlimited'|'limited'|null,
     *     InstanceMatchCriteria?: 'open'|'targeted'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     OutpostArn?: string|null,
     *     PlacementGroupArn?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     CommitmentDuration?: int<1, 200000000>|null,
     *     DeliveryPreference?: 'fixed'|'incremental'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
