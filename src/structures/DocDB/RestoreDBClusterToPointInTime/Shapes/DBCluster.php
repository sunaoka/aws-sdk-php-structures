<?php

namespace Sunaoka\Aws\Structures\DocDB\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property int|null $BackupRetentionPeriod
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
 * @property string|null $CloneGroupId
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property bool|null $DeletionProtection
 * @property string|null $StorageType
 * @property ServerlessV2ScalingConfigurationInfo|null $ServerlessV2ScalingConfiguration
 * @property ClusterMasterUserSecret|null $MasterUserSecret
 */
class DBCluster extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     BackupRetentionPeriod?: int|null,
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
     *     CloneGroupId?: string|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null,
     *     StorageType?: string|null,
     *     ServerlessV2ScalingConfiguration?: ServerlessV2ScalingConfigurationInfo|null,
     *     MasterUserSecret?: ClusterMasterUserSecret|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
