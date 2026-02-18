<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property string|null $Engine
 * @property string|null $DBInstanceStatus
 * @property string|null $MasterUsername
 * @property string|null $DBName
 * @property Endpoint|null $Endpoint
 * @property int|null $AllocatedStorage
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property string|null $PreferredBackupWindow
 * @property int|null $BackupRetentionPeriod
 * @property list<DBSecurityGroupMembership>|null $DBSecurityGroups
 * @property list<VpcSecurityGroupMembership>|null $VpcSecurityGroups
 * @property list<DBParameterGroupStatus>|null $DBParameterGroups
 * @property string|null $AvailabilityZone
 * @property DBSubnetGroup|null $DBSubnetGroup
 * @property string|null $PreferredMaintenanceWindow
 * @property 'first'|'second'|'last'|null $UpgradeRolloutOrder
 * @property PendingModifiedValues|null $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult|null $LatestRestorableTime
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string>|null $ReadReplicaDBInstanceIdentifiers
 * @property list<string>|null $ReadReplicaDBClusterIdentifiers
 * @property 'open-read-only'|'mounted'|null $ReplicaMode
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property list<OptionGroupMembership>|null $OptionGroupMemberships
 * @property string|null $CharacterSetName
 * @property string|null $NcharCharacterSetName
 * @property string|null $SecondaryAvailabilityZone
 * @property bool|null $PubliclyAccessible
 * @property list<DBInstanceStatusInfo>|null $StatusInfos
 * @property string|null $StorageType
 * @property 'none'|'sse-kms'|'sse-rds'|null $StorageEncryptionType
 * @property string|null $TdeCredentialArn
 * @property int|null $DbInstancePort
 * @property string|null $DBClusterIdentifier
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $DbiResourceId
 * @property string|null $CACertificateIdentifier
 * @property list<DomainMembership>|null $DomainMemberships
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $EnhancedMonitoringResourceArn
 * @property string|null $MonitoringRoleArn
 * @property int|null $PromotionTier
 * @property string|null $DBInstanceArn
 * @property string|null $Timezone
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $PerformanceInsightsEnabled
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property list<string>|null $EnabledCloudwatchLogsExports
 * @property list<ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $DeletionProtection
 * @property list<DBInstanceRole>|null $AssociatedRoles
 * @property Endpoint|null $ListenerEndpoint
 * @property int|null $MaxAllocatedStorage
 * @property list<Tag>|null $TagList
 * @property 'full'|'all-paused'|null $AutomationMode
 * @property \Aws\Api\DateTimeResult|null $ResumeFullAutomationModeTime
 * @property bool|null $CustomerOwnedIpEnabled
 * @property string|null $NetworkType
 * @property 'stopped'|'starting'|'started'|'stopping'|null $ActivityStreamStatus
 * @property string|null $ActivityStreamKmsKeyId
 * @property string|null $ActivityStreamKinesisStreamName
 * @property 'sync'|'async'|null $ActivityStreamMode
 * @property bool|null $ActivityStreamEngineNativeAuditFieldsIncluded
 * @property string|null $AwsBackupRecoveryPointArn
 * @property list<DBInstanceAutomatedBackupsReplication>|null $DBInstanceAutomatedBackupsReplications
 * @property string|null $BackupTarget
 * @property \Aws\Api\DateTimeResult|null $AutomaticRestartTime
 * @property string|null $CustomIamInstanceProfile
 * @property 'locked'|'unlocked'|'locking-policy'|'unlocking-policy'|null $ActivityStreamPolicyStatus
 * @property CertificateDetails|null $CertificateDetails
 * @property string|null $DBSystemId
 * @property MasterUserSecret|null $MasterUserSecret
 * @property string|null $ReadReplicaSourceDBClusterIdentifier
 * @property string|null $PercentProgress
 * @property bool|null $MultiTenant
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $IsStorageConfigUpgradeAvailable
 * @property string|null $EngineLifecycleSupport
 * @property list<AdditionalStorageVolumeOutput>|null $AdditionalStorageVolumes
 * @property string|null $StorageVolumeStatus
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     Engine?: string|null,
     *     DBInstanceStatus?: string|null,
     *     MasterUsername?: string|null,
     *     DBName?: string|null,
     *     Endpoint?: Endpoint|null,
     *     AllocatedStorage?: int|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     PreferredBackupWindow?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBSecurityGroups?: list<DBSecurityGroupMembership>|null,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>|null,
     *     DBParameterGroups?: list<DBParameterGroupStatus>|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroup?: DBSubnetGroup|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     UpgradeRolloutOrder?: 'first'|'second'|'last'|null,
     *     PendingModifiedValues?: PendingModifiedValues|null,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     ReadReplicaSourceDBInstanceIdentifier?: string|null,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>|null,
     *     ReadReplicaDBClusterIdentifiers?: list<string>|null,
     *     ReplicaMode?: 'open-read-only'|'mounted'|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     OptionGroupMemberships?: list<OptionGroupMembership>|null,
     *     CharacterSetName?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     SecondaryAvailabilityZone?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     StatusInfos?: list<DBInstanceStatusInfo>|null,
     *     StorageType?: string|null,
     *     StorageEncryptionType?: 'none'|'sse-kms'|'sse-rds'|null,
     *     TdeCredentialArn?: string|null,
     *     DbInstancePort?: int|null,
     *     DBClusterIdentifier?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     DbiResourceId?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     DomainMemberships?: list<DomainMembership>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     EnhancedMonitoringResourceArn?: string|null,
     *     MonitoringRoleArn?: string|null,
     *     PromotionTier?: int|null,
     *     DBInstanceArn?: string|null,
     *     Timezone?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     PerformanceInsightsEnabled?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnabledCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<ProcessorFeature>|null,
     *     DeletionProtection?: bool|null,
     *     AssociatedRoles?: list<DBInstanceRole>|null,
     *     ListenerEndpoint?: Endpoint|null,
     *     MaxAllocatedStorage?: int|null,
     *     TagList?: list<Tag>|null,
     *     AutomationMode?: 'full'|'all-paused'|null,
     *     ResumeFullAutomationModeTime?: \Aws\Api\DateTimeResult|null,
     *     CustomerOwnedIpEnabled?: bool|null,
     *     NetworkType?: string|null,
     *     ActivityStreamStatus?: 'stopped'|'starting'|'started'|'stopping'|null,
     *     ActivityStreamKmsKeyId?: string|null,
     *     ActivityStreamKinesisStreamName?: string|null,
     *     ActivityStreamMode?: 'sync'|'async'|null,
     *     ActivityStreamEngineNativeAuditFieldsIncluded?: bool|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     DBInstanceAutomatedBackupsReplications?: list<DBInstanceAutomatedBackupsReplication>|null,
     *     BackupTarget?: string|null,
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult|null,
     *     CustomIamInstanceProfile?: string|null,
     *     ActivityStreamPolicyStatus?: 'locked'|'unlocked'|'locking-policy'|'unlocking-policy'|null,
     *     CertificateDetails?: CertificateDetails|null,
     *     DBSystemId?: string|null,
     *     MasterUserSecret?: MasterUserSecret|null,
     *     ReadReplicaSourceDBClusterIdentifier?: string|null,
     *     PercentProgress?: string|null,
     *     MultiTenant?: bool|null,
     *     DedicatedLogVolume?: bool|null,
     *     IsStorageConfigUpgradeAvailable?: bool|null,
     *     EngineLifecycleSupport?: string|null,
     *     AdditionalStorageVolumes?: list<AdditionalStorageVolumeOutput>|null,
     *     StorageVolumeStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
