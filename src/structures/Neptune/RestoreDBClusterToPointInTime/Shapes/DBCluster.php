<?php

namespace Sunaoka\Aws\Structures\Neptune\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AllocatedStorage
 * @property list<string> $AvailabilityZones
 * @property int $BackupRetentionPeriod
 * @property string $CharacterSetName
 * @property string $DatabaseName
 * @property string $DBClusterIdentifier
 * @property string $DBClusterParameterGroup
 * @property string $DBSubnetGroup
 * @property string $Status
 * @property string $PercentProgress
 * @property \Aws\Api\DateTimeResult $EarliestRestorableTime
 * @property string $Endpoint
 * @property string $ReaderEndpoint
 * @property bool $MultiAZ
 * @property string $Engine
 * @property string $EngineVersion
 * @property \Aws\Api\DateTimeResult $LatestRestorableTime
 * @property int $Port
 * @property string $MasterUsername
 * @property list<DBClusterOptionGroupStatus> $DBClusterOptionGroupMemberships
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property string $ReplicationSourceIdentifier
 * @property list<string> $ReadReplicaIdentifiers
 * @property list<DBClusterMember> $DBClusterMembers
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property string $HostedZoneId
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbClusterResourceId
 * @property string $DBClusterArn
 * @property list<DBClusterRole> $AssociatedRoles
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property string $CloneGroupId
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property bool $CopyTagsToSnapshot
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property ClusterPendingModifiedValues $PendingModifiedValues
 * @property bool $DeletionProtection
 * @property bool $CrossAccountClone
 * @property \Aws\Api\DateTimeResult $AutomaticRestartTime
 * @property ServerlessV2ScalingConfigurationInfo $ServerlessV2ScalingConfiguration
 * @property string $GlobalClusterIdentifier
 * @property \Aws\Api\DateTimeResult $IOOptimizedNextAllowedModificationTime
 * @property string $StorageType
 */
class DBCluster extends Shape
{
    /**
     * @param array{
     *     AllocatedStorage?: int,
     *     AvailabilityZones?: list<string>,
     *     BackupRetentionPeriod?: int,
     *     CharacterSetName?: string,
     *     DatabaseName?: string,
     *     DBClusterIdentifier?: string,
     *     DBClusterParameterGroup?: string,
     *     DBSubnetGroup?: string,
     *     Status?: string,
     *     PercentProgress?: string,
     *     EarliestRestorableTime?: \Aws\Api\DateTimeResult,
     *     Endpoint?: string,
     *     ReaderEndpoint?: string,
     *     MultiAZ?: bool,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult,
     *     Port?: int,
     *     MasterUsername?: string,
     *     DBClusterOptionGroupMemberships?: list<DBClusterOptionGroupStatus>,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     ReplicationSourceIdentifier?: string,
     *     ReadReplicaIdentifiers?: list<string>,
     *     DBClusterMembers?: list<DBClusterMember>,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     HostedZoneId?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbClusterResourceId?: string,
     *     DBClusterArn?: string,
     *     AssociatedRoles?: list<DBClusterRole>,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     CloneGroupId?: string,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     CopyTagsToSnapshot?: bool,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     PendingModifiedValues?: ClusterPendingModifiedValues,
     *     DeletionProtection?: bool,
     *     CrossAccountClone?: bool,
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult,
     *     ServerlessV2ScalingConfiguration?: ServerlessV2ScalingConfigurationInfo,
     *     GlobalClusterIdentifier?: string,
     *     IOOptimizedNextAllowedModificationTime?: \Aws\Api\DateTimeResult,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
