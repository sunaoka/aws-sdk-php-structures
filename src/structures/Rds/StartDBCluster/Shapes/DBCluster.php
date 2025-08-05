<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBCluster\Shapes;

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
 * @property \Aws\Api\DateTimeResult|null $AutomaticRestartTime
 * @property string|null $PercentProgress
 * @property \Aws\Api\DateTimeResult|null $EarliestRestorableTime
 * @property string|null $Endpoint
 * @property string|null $ReaderEndpoint
 * @property list<string>|null $CustomEndpoints
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
 * @property list<DBClusterStatusInfo>|null $StatusInfos
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
 * @property \Aws\Api\DateTimeResult|null $EarliestBacktrackTime
 * @property int|null $BacktrackWindow
 * @property int|null $BacktrackConsumedChangeRecords
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property int|null $Capacity
 * @property string|null $EngineMode
 * @property ScalingConfigurationInfo|null $ScalingConfigurationInfo
 * @property RdsCustomClusterConfiguration|null $RdsCustomClusterConfiguration
 * @property bool|null $DeletionProtection
 * @property bool|null $HttpEndpointEnabled
 * @property 'sync'|'async'|null $ActivityStreamMode
 * @property 'stopped'|'starting'|'started'|'stopping'|null $ActivityStreamStatus
 * @property string|null $ActivityStreamKmsKeyId
 * @property string|null $ActivityStreamKinesisStreamName
 * @property bool|null $CopyTagsToSnapshot
 * @property bool|null $CrossAccountClone
 * @property list<DomainMembership>|null $DomainMemberships
 * @property list<Tag>|null $TagList
 * @property string|null $GlobalClusterIdentifier
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'unknown'|null $GlobalWriteForwardingStatus
 * @property bool|null $GlobalWriteForwardingRequested
 * @property ClusterPendingModifiedValues|null $PendingModifiedValues
 * @property string|null $DBClusterInstanceClass
 * @property string|null $StorageType
 * @property int|null $Iops
 * @property bool|null $PubliclyAccessible
 * @property bool|null $AutoMinorVersionUpgrade
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $PerformanceInsightsEnabled
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property ServerlessV2ScalingConfigurationInfo|null $ServerlessV2ScalingConfiguration
 * @property string|null $ServerlessV2PlatformVersion
 * @property string|null $NetworkType
 * @property string|null $DBSystemId
 * @property MasterUserSecret|null $MasterUserSecret
 * @property \Aws\Api\DateTimeResult|null $IOOptimizedNextAllowedModificationTime
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'requested'|null $LocalWriteForwardingStatus
 * @property string|null $AwsBackupRecoveryPointArn
 * @property LimitlessDatabase|null $LimitlessDatabase
 * @property int|null $StorageThroughput
 * @property 'standard'|'limitless'|null $ClusterScalabilityType
 * @property CertificateDetails|null $CertificateDetails
 * @property string|null $EngineLifecycleSupport
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
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult|null,
     *     PercentProgress?: string|null,
     *     EarliestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     Endpoint?: string|null,
     *     ReaderEndpoint?: string|null,
     *     CustomEndpoints?: list<string>|null,
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
     *     StatusInfos?: list<DBClusterStatusInfo>|null,
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
     *     EarliestBacktrackTime?: \Aws\Api\DateTimeResult|null,
     *     BacktrackWindow?: int|null,
     *     BacktrackConsumedChangeRecords?: int|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     Capacity?: int|null,
     *     EngineMode?: string|null,
     *     ScalingConfigurationInfo?: ScalingConfigurationInfo|null,
     *     RdsCustomClusterConfiguration?: RdsCustomClusterConfiguration|null,
     *     DeletionProtection?: bool|null,
     *     HttpEndpointEnabled?: bool|null,
     *     ActivityStreamMode?: 'sync'|'async'|null,
     *     ActivityStreamStatus?: 'stopped'|'starting'|'started'|'stopping'|null,
     *     ActivityStreamKmsKeyId?: string|null,
     *     ActivityStreamKinesisStreamName?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     CrossAccountClone?: bool|null,
     *     DomainMemberships?: list<DomainMembership>|null,
     *     TagList?: list<Tag>|null,
     *     GlobalClusterIdentifier?: string|null,
     *     GlobalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'unknown'|null,
     *     GlobalWriteForwardingRequested?: bool|null,
     *     PendingModifiedValues?: ClusterPendingModifiedValues|null,
     *     DBClusterInstanceClass?: string|null,
     *     StorageType?: string|null,
     *     Iops?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     PerformanceInsightsEnabled?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     ServerlessV2ScalingConfiguration?: ServerlessV2ScalingConfigurationInfo|null,
     *     ServerlessV2PlatformVersion?: string|null,
     *     NetworkType?: string|null,
     *     DBSystemId?: string|null,
     *     MasterUserSecret?: MasterUserSecret|null,
     *     IOOptimizedNextAllowedModificationTime?: \Aws\Api\DateTimeResult|null,
     *     LocalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'requested'|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     LimitlessDatabase?: LimitlessDatabase|null,
     *     StorageThroughput?: int|null,
     *     ClusterScalabilityType?: 'standard'|'limitless'|null,
     *     CertificateDetails?: CertificateDetails|null,
     *     EngineLifecycleSupport?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
