<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $InstanceType
 * @property 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro' $InstancePlatform
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property 'default'|'dedicated' $Tenancy
 * @property int $InstanceCount
 * @property bool $EbsOptimized
 * @property bool $EphemeralStorage
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property 'unlimited'|'limited' $EndDateType
 * @property 'open'|'targeted' $InstanceMatchCriteria
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $OutpostArn
 * @property string $PlacementGroupArn
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property int<1, 200000000> $CommitmentDuration
 * @property 'fixed'|'incremental' $DeliveryPreference
 */
class CreateCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     InstanceType: string,
     *     InstancePlatform: 'Linux/UNIX'|'Red Hat Enterprise Linux'|'SUSE Linux'|'Windows'|'Windows with SQL Server'|'Windows with SQL Server Enterprise'|'Windows with SQL Server Standard'|'Windows with SQL Server Web'|'Linux with SQL Server Standard'|'Linux with SQL Server Web'|'Linux with SQL Server Enterprise'|'RHEL with SQL Server Standard'|'RHEL with SQL Server Enterprise'|'RHEL with SQL Server Web'|'RHEL with HA'|'RHEL with HA and SQL Server Standard'|'RHEL with HA and SQL Server Enterprise'|'Ubuntu Pro',
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     Tenancy?: 'default'|'dedicated',
     *     InstanceCount: int,
     *     EbsOptimized?: bool,
     *     EphemeralStorage?: bool,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     EndDateType?: 'unlimited'|'limited',
     *     InstanceMatchCriteria?: 'open'|'targeted',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     OutpostArn?: string,
     *     PlacementGroupArn?: string,
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     CommitmentDuration?: int<1, 200000000>,
     *     DeliveryPreference?: 'fixed'|'incremental'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
