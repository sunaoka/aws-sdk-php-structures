<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBInstanceToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceIdentifier
 * @property string|null $DBInstanceClass
 * @property string|null $Engine
 * @property string|null $DBInstanceStatus
 * @property \Aws\Api\DateTimeResult|null $AutomaticRestartTime
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
 * @property list<OptionGroupMembership>|null $OptionGroupMemberships
 * @property string|null $CharacterSetName
 * @property string|null $NcharCharacterSetName
 * @property string|null $SecondaryAvailabilityZone
 * @property bool|null $PubliclyAccessible
 * @property list<DBInstanceStatusInfo>|null $StatusInfos
 * @property string|null $StorageType
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
 * @property list<DBInstanceAutomatedBackupsReplication>|null $DBInstanceAutomatedBackupsReplications
 * @property bool|null $CustomerOwnedIpEnabled
 * @property string|null $AwsBackupRecoveryPointArn
 * @property 'stopped'|'starting'|'started'|'stopping'|null $ActivityStreamStatus
 * @property string|null $ActivityStreamKmsKeyId
 * @property string|null $ActivityStreamKinesisStreamName
 * @property 'sync'|'async'|null $ActivityStreamMode
 * @property bool|null $ActivityStreamEngineNativeAuditFieldsIncluded
 * @property 'full'|'all-paused'|null $AutomationMode
 * @property \Aws\Api\DateTimeResult|null $ResumeFullAutomationModeTime
 * @property string|null $CustomIamInstanceProfile
 * @property string|null $BackupTarget
 * @property string|null $NetworkType
 * @property 'locked'|'unlocked'|'locking-policy'|'unlocking-policy'|null $ActivityStreamPolicyStatus
 * @property int|null $StorageThroughput
 * @property string|null $DBSystemId
 * @property MasterUserSecret|null $MasterUserSecret
 * @property CertificateDetails|null $CertificateDetails
 * @property string|null $ReadReplicaSourceDBClusterIdentifier
 * @property string|null $PercentProgress
 * @property bool|null $DedicatedLogVolume
 * @property bool|null $IsStorageConfigUpgradeAvailable
 * @property bool|null $MultiTenant
 * @property string|null $EngineLifecycleSupport
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string|null,
     *     DBInstanceClass?: string|null,
     *     Engine?: string|null,
     *     DBInstanceStatus?: string|null,
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult|null,
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
     *     OptionGroupMemberships?: list<OptionGroupMembership>|null,
     *     CharacterSetName?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     SecondaryAvailabilityZone?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     StatusInfos?: list<DBInstanceStatusInfo>|null,
     *     StorageType?: string|null,
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
     *     DBInstanceAutomatedBackupsReplications?: list<DBInstanceAutomatedBackupsReplication>|null,
     *     CustomerOwnedIpEnabled?: bool|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     ActivityStreamStatus?: 'stopped'|'starting'|'started'|'stopping'|null,
     *     ActivityStreamKmsKeyId?: string|null,
     *     ActivityStreamKinesisStreamName?: string|null,
     *     ActivityStreamMode?: 'sync'|'async'|null,
     *     ActivityStreamEngineNativeAuditFieldsIncluded?: bool|null,
     *     AutomationMode?: 'full'|'all-paused'|null,
     *     ResumeFullAutomationModeTime?: \Aws\Api\DateTimeResult|null,
     *     CustomIamInstanceProfile?: string|null,
     *     BackupTarget?: string|null,
     *     NetworkType?: string|null,
     *     ActivityStreamPolicyStatus?: 'locked'|'unlocked'|'locking-policy'|'unlocking-policy'|null,
     *     StorageThroughput?: int|null,
     *     DBSystemId?: string|null,
     *     MasterUserSecret?: MasterUserSecret|null,
     *     CertificateDetails?: CertificateDetails|null,
     *     ReadReplicaSourceDBClusterIdentifier?: string|null,
     *     PercentProgress?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     IsStorageConfigUpgradeAvailable?: bool|null,
     *     MultiTenant?: bool|null,
     *     EngineLifecycleSupport?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
