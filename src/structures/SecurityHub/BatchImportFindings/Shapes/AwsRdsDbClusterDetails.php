<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AllocatedStorage
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $DatabaseName
 * @property string $Status
 * @property string $Endpoint
 * @property string $ReaderEndpoint
 * @property list<string> $CustomEndpoints
 * @property bool $MultiAz
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $Port
 * @property string $MasterUsername
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property list<string> $ReadReplicaIdentifiers
 * @property list<AwsRdsDbInstanceVpcSecurityGroup> $VpcSecurityGroups
 * @property string $HostedZoneId
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbClusterResourceId
 * @property list<AwsRdsDbClusterAssociatedRole> $AssociatedRoles
 * @property string $ClusterCreateTime
 * @property list<string> $EnabledCloudWatchLogsExports
 * @property string $EngineMode
 * @property bool $DeletionProtection
 * @property bool $HttpEndpointEnabled
 * @property string $ActivityStreamStatus
 * @property bool $CopyTagsToSnapshot
 * @property bool $CrossAccountClone
 * @property list<AwsRdsDbDomainMembership> $DomainMemberships
 * @property string $DbClusterParameterGroup
 * @property string $DbSubnetGroup
 * @property list<AwsRdsDbClusterOptionGroupMembership> $DbClusterOptionGroupMemberships
 * @property string $DbClusterIdentifier
 * @property list<AwsRdsDbClusterMember> $DbClusterMembers
 * @property bool $IamDatabaseAuthenticationEnabled
 * @property bool $AutoMinorVersionUpgrade
 */
class AwsRdsDbClusterDetails extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int,
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     DatabaseName?: string,
     *     Status?: string,
     *     Endpoint?: string,
     *     ReaderEndpoint?: string,
     *     CustomEndpoints?: list<string>,
     *     MultiAz?: bool,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     Port?: int,
     *     MasterUsername?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ReadReplicaIdentifiers?: list<string>,
     *     VpcSecurityGroups?: list<AwsRdsDbInstanceVpcSecurityGroup>,
     *     HostedZoneId?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbClusterResourceId?: string,
     *     AssociatedRoles?: list<AwsRdsDbClusterAssociatedRole>,
     *     ClusterCreateTime?: string,
     *     EnabledCloudWatchLogsExports?: list<string>,
     *     EngineMode?: string,
     *     DeletionProtection?: bool,
     *     HttpEndpointEnabled?: bool,
     *     ActivityStreamStatus?: string,
     *     CopyTagsToSnapshot?: bool,
     *     CrossAccountClone?: bool,
     *     DomainMemberships?: list<AwsRdsDbDomainMembership>,
     *     DbClusterParameterGroup?: string,
     *     DbSubnetGroup?: string,
     *     DbClusterOptionGroupMemberships?: list<AwsRdsDbClusterOptionGroupMembership>,
     *     DbClusterIdentifier?: string,
     *     DbClusterMembers?: list<AwsRdsDbClusterMember>,
     *     IamDatabaseAuthenticationEnabled?: bool,
     *     AutoMinorVersionUpgrade?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
