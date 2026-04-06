<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RebootReplicationInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationInstanceIdentifier
 * @property string|null $ReplicationInstanceClass
 * @property string|null $ReplicationInstanceStatus
 * @property int|null $AllocatedStorage
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property string|null $AvailabilityZone
 * @property ReplicationSubnetGroup|null $ReplicationSubnetGroup
 * @property string|null $PreferredMaintenanceWindow
 * @property ReplicationPendingModifiedValues|null $PendingModifiedValues
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $KmsKeyId
 * @property string|null $ReplicationInstanceArn
 * @property string|null $ReplicationInstancePublicIpAddress
 * @property string|null $ReplicationInstancePrivateIpAddress
 * @property list<string>|null $ReplicationInstancePublicIpAddresses
 * @property list<string>|null $ReplicationInstancePrivateIpAddresses
 * @property list<string>|null $ReplicationInstanceIpv6Addresses
 * @property bool|null $PubliclyAccessible
 * @property string|null $SecondaryAvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $FreeUntil
 * @property string|null $DnsNameServers
 * @property string|null $NetworkType
 * @property KerberosAuthenticationSettings|null $KerberosAuthenticationSettings
 */
class ReplicationInstance extends Shape
{
    /**
     * @param array{
     *     ReplicationInstanceIdentifier?: string|null,
     *     ReplicationInstanceClass?: string|null,
     *     ReplicationInstanceStatus?: string|null,
     *     AllocatedStorage?: int|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     AvailabilityZone?: string|null,
     *     ReplicationSubnetGroup?: ReplicationSubnetGroup|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     PendingModifiedValues?: ReplicationPendingModifiedValues|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     KmsKeyId?: string|null,
     *     ReplicationInstanceArn?: string|null,
     *     ReplicationInstancePublicIpAddress?: string|null,
     *     ReplicationInstancePrivateIpAddress?: string|null,
     *     ReplicationInstancePublicIpAddresses?: list<string>|null,
     *     ReplicationInstancePrivateIpAddresses?: list<string>|null,
     *     ReplicationInstanceIpv6Addresses?: list<string>|null,
     *     PubliclyAccessible?: bool|null,
     *     SecondaryAvailabilityZone?: string|null,
     *     FreeUntil?: \Aws\Api\DateTimeResult|null,
     *     DnsNameServers?: string|null,
     *     NetworkType?: string|null,
     *     KerberosAuthenticationSettings?: KerberosAuthenticationSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
