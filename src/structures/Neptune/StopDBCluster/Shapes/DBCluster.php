<?php

namespace Sunaoka\Aws\Structures\Neptune\StopDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AllocatedStorage
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
 * @property string|null $CharacterSetName
 * @property string|null $DatabaseName
 * @property string|null $DBClusterIdentifier
 * @property string|null $DBClusterParameterGroup
 * @property string|null $DBSubnetGroup
 * @property string|null $Status
 * @property string|null $PercentProgress
 * @property \Aws\Api\DateTimeResult|null $EarliestRestorableTime
 * @property string|null $Endpoint
 * @property string|null $ReaderEndpoint
 * @property bool|null $MultiAZ
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property \Aws\Api\DateTimeResult|null $LatestRestorableTime
 * @property int|null $Port
 * @property string|null $MasterUsername
 * @property list<DBClusterOptionGroupStatus>|null $DBClusterOptionGroupMemberships
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $ReplicationSourceIdentifier
 * @property list<string>|null $ReadReplicaIdentifiers
 * @property list<DBClusterMember>|null $DBClusterMembers
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property string|null $HostedZoneId
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbClusterResourceId
 * @property string|null $DBClusterArn
 * @property list<DBClusterRole>|null $AssociatedRoles
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property string|null $CloneGroupId
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property bool|null $CopyTagsToSnapshot
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property ClusterPendingModifiedValues|null $PendingModifiedValues
 * @property bool|null $DeletionProtection
 * @property bool|null $CrossAccountClone
 * @property \Aws\Api\DateTimeResult|null $AutomaticRestartTime
 * @property ServerlessV2ScalingConfigurationInfo|null $ServerlessV2ScalingConfiguration
 * @property string|null $GlobalClusterIdentifier
 * @property \Aws\Api\DateTimeResult|null $IOOptimizedNextAllowedModificationTime
 * @property string|null $StorageType
 */
class DBCluster extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int|null,
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
     *     CharacterSetName?: string|null,
     *     DatabaseName?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     DBClusterParameterGroup?: string|null,
     *     DBSubnetGroup?: string|null,
     *     Status?: string|null,
     *     PercentProgress?: string|null,
     *     EarliestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     Endpoint?: string|null,
     *     ReaderEndpoint?: string|null,
     *     MultiAZ?: bool|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     Port?: int|null,
     *     MasterUsername?: string|null,
     *     DBClusterOptionGroupMemberships?: list<DBClusterOptionGroupStatus>|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     ReplicationSourceIdentifier?: string|null,
     *     ReadReplicaIdentifiers?: list<string>|null,
     *     DBClusterMembers?: list<DBClusterMember>|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     HostedZoneId?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbClusterResourceId?: string|null,
     *     DBClusterArn?: string|null,
     *     AssociatedRoles?: list<DBClusterRole>|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     CloneGroupId?: string|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     PendingModifiedValues?: ClusterPendingModifiedValues|null,
     *     DeletionProtection?: bool|null,
     *     CrossAccountClone?: bool|null,
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult|null,
     *     ServerlessV2ScalingConfiguration?: ServerlessV2ScalingConfigurationInfo|null,
     *     GlobalClusterIdentifier?: string|null,
     *     IOOptimizedNextAllowedModificationTime?: \Aws\Api\DateTimeResult|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
