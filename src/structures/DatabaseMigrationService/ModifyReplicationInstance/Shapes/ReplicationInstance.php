<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationInstanceIdentifier
 * @property string $ReplicationInstanceClass
 * @property string $ReplicationInstanceStatus
 * @property int $AllocatedStorage
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property string $AvailabilityZone
 * @property ReplicationSubnetGroup $ReplicationSubnetGroup
 * @property string $PreferredMaintenanceWindow
 * @property ReplicationPendingModifiedValues $PendingModifiedValues
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property string $KmsKeyId
 * @property string $ReplicationInstanceArn
 * @property string $ReplicationInstancePublicIpAddress
 * @property string $ReplicationInstancePrivateIpAddress
 * @property list<string> $ReplicationInstancePublicIpAddresses
 * @property list<string> $ReplicationInstancePrivateIpAddresses
 * @property list<string> $ReplicationInstanceIpv6Addresses
 * @property bool $PubliclyAccessible
 * @property string $SecondaryAvailabilityZone
 * @property \Aws\Api\DateTimeResult $FreeUntil
 * @property string $DnsNameServers
 * @property string $NetworkType
 * @property KerberosAuthenticationSettings $KerberosAuthenticationSettings
 */
class ReplicationInstance extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceIdentifier?: string,
     *     ReplicationInstanceClass?: string,
     *     ReplicationInstanceStatus?: string,
     *     AllocatedStorage?: int,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     AvailabilityZone?: string,
     *     ReplicationSubnetGroup?: ReplicationSubnetGroup,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: ReplicationPendingModifiedValues,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     KmsKeyId?: string,
     *     ReplicationInstanceArn?: string,
     *     ReplicationInstancePublicIpAddress?: string,
     *     ReplicationInstancePrivateIpAddress?: string,
     *     ReplicationInstancePublicIpAddresses?: list<string>,
     *     ReplicationInstancePrivateIpAddresses?: list<string>,
     *     ReplicationInstanceIpv6Addresses?: list<string>,
     *     PubliclyAccessible?: bool,
     *     SecondaryAvailabilityZone?: string,
     *     FreeUntil?: \Aws\Api\DateTimeResult,
     *     DnsNameServers?: string,
     *     NetworkType?: string,
     *     KerberosAuthenticationSettings?: KerberosAuthenticationSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
