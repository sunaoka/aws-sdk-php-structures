<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBCluster\Shapes;

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
 * @property \Aws\Api\DateTimeResult $AutomaticRestartTime
 * @property string $PercentProgress
 * @property \Aws\Api\DateTimeResult $EarliestRestorableTime
 * @property string $Endpoint
 * @property string $ReaderEndpoint
 * @property list<string> $CustomEndpoints
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
 * @property list<DBClusterStatusInfo> $StatusInfos
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
 * @property \Aws\Api\DateTimeResult $EarliestBacktrackTime
 * @property int $BacktrackWindow
 * @property int $BacktrackConsumedChangeRecords
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property int $Capacity
 * @property string $EngineMode
 * @property ScalingConfigurationInfo $ScalingConfigurationInfo
 * @property RdsCustomClusterConfiguration $RdsCustomClusterConfiguration
 * @property bool $DeletionProtection
 * @property bool $HttpEndpointEnabled
 * @property 'sync'|'async' $ActivityStreamMode
 * @property 'stopped'|'starting'|'started'|'stopping' $ActivityStreamStatus
 * @property string $ActivityStreamKmsKeyId
 * @property string $ActivityStreamKinesisStreamName
 * @property bool $CopyTagsToSnapshot
 * @property bool $CrossAccountClone
 * @property list<DomainMembership> $DomainMemberships
 * @property list<Tag> $TagList
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'unknown' $GlobalWriteForwardingStatus
 * @property bool $GlobalWriteForwardingRequested
 * @property ClusterPendingModifiedValues $PendingModifiedValues
 * @property string $DBClusterInstanceClass
 * @property string $StorageType
 * @property int $Iops
 * @property bool $PubliclyAccessible
 * @property bool $AutoMinorVersionUpgrade
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $PerformanceInsightsEnabled
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property ServerlessV2ScalingConfigurationInfo $ServerlessV2ScalingConfiguration
 * @property string $NetworkType
 * @property string $DBSystemId
 * @property MasterUserSecret $MasterUserSecret
 * @property \Aws\Api\DateTimeResult $IOOptimizedNextAllowedModificationTime
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'requested' $LocalWriteForwardingStatus
 * @property string $AwsBackupRecoveryPointArn
 * @property LimitlessDatabase $LimitlessDatabase
 * @property int $StorageThroughput
 * @property 'standard'|'limitless' $ClusterScalabilityType
 * @property CertificateDetails $CertificateDetails
 * @property string $EngineLifecycleSupport
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
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult,
     *     PercentProgress?: string,
     *     EarliestRestorableTime?: \Aws\Api\DateTimeResult,
     *     Endpoint?: string,
     *     ReaderEndpoint?: string,
     *     CustomEndpoints?: list<string>,
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
     *     StatusInfos?: list<DBClusterStatusInfo>,
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
     *     EarliestBacktrackTime?: \Aws\Api\DateTimeResult,
     *     BacktrackWindow?: int,
     *     BacktrackConsumedChangeRecords?: int,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     Capacity?: int,
     *     EngineMode?: string,
     *     ScalingConfigurationInfo?: ScalingConfigurationInfo,
     *     RdsCustomClusterConfiguration?: RdsCustomClusterConfiguration,
     *     DeletionProtection?: bool,
     *     HttpEndpointEnabled?: bool,
     *     ActivityStreamMode?: 'sync'|'async',
     *     ActivityStreamStatus?: 'stopped'|'starting'|'started'|'stopping',
     *     ActivityStreamKmsKeyId?: string,
     *     ActivityStreamKinesisStreamName?: string,
     *     CopyTagsToSnapshot?: bool,
     *     CrossAccountClone?: bool,
     *     DomainMemberships?: list<DomainMembership>,
     *     TagList?: list<Tag>,
     *     GlobalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'unknown',
     *     GlobalWriteForwardingRequested?: bool,
     *     PendingModifiedValues?: ClusterPendingModifiedValues,
     *     DBClusterInstanceClass?: string,
     *     StorageType?: string,
     *     Iops?: int,
     *     PubliclyAccessible?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     PerformanceInsightsEnabled?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     ServerlessV2ScalingConfiguration?: ServerlessV2ScalingConfigurationInfo,
     *     NetworkType?: string,
     *     DBSystemId?: string,
     *     MasterUserSecret?: MasterUserSecret,
     *     IOOptimizedNextAllowedModificationTime?: \Aws\Api\DateTimeResult,
     *     LocalWriteForwardingStatus?: 'enabled'|'disabled'|'enabling'|'disabling'|'requested',
     *     AwsBackupRecoveryPointArn?: string,
     *     LimitlessDatabase?: LimitlessDatabase,
     *     StorageThroughput?: int,
     *     ClusterScalabilityType?: 'standard'|'limitless',
     *     CertificateDetails?: CertificateDetails,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
