<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplica\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceIdentifier
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $DBInstanceStatus
 * @property \Aws\Api\DateTimeResult $AutomaticRestartTime
 * @property string $MasterUsername
 * @property string $DBName
 * @property Endpoint $Endpoint
 * @property int $AllocatedStorage
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property string $PreferredBackupWindow
 * @property int $BackupRetentionPeriod
 * @property list<DBSecurityGroupMembership> $DBSecurityGroups
 * @property list<VpcSecurityGroupMembership> $VpcSecurityGroups
 * @property list<DBParameterGroupStatus> $DBParameterGroups
 * @property string $AvailabilityZone
 * @property DBSubnetGroup $DBSubnetGroup
 * @property string $PreferredMaintenanceWindow
 * @property PendingModifiedValues $PendingModifiedValues
 * @property \Aws\Api\DateTimeResult $LatestRestorableTime
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property string $ReadReplicaSourceDBInstanceIdentifier
 * @property list<string> $ReadReplicaDBInstanceIdentifiers
 * @property list<string> $ReadReplicaDBClusterIdentifiers
 * @property 'open-read-only'|'mounted' $ReplicaMode
 * @property string $LicenseModel
 * @property int $Iops
 * @property list<OptionGroupMembership> $OptionGroupMemberships
 * @property string $CharacterSetName
 * @property string $NcharCharacterSetName
 * @property string $SecondaryAvailabilityZone
 * @property bool $PubliclyAccessible
 * @property list<DBInstanceStatusInfo> $StatusInfos
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property int $DbInstancePort
 * @property string $DBClusterIdentifier
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $DbiResourceId
 * @property string $CACertificateIdentifier
 * @property list<DomainMembership> $DomainMemberships
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $EnhancedMonitoringResourceArn
 * @property string $MonitoringRoleArn
 * @property int $PromotionTier
 * @property string $DBInstanceArn
 * @property string $Timezone
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $PerformanceInsightsEnabled
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property list<string> $EnabledCloudwatchLogsExports
 * @property list<ProcessorFeature> $ProcessorFeatures
 * @property bool $DeletionProtection
 * @property list<DBInstanceRole> $AssociatedRoles
 * @property Endpoint $ListenerEndpoint
 * @property int $MaxAllocatedStorage
 * @property list<Tag> $TagList
 * @property list<DBInstanceAutomatedBackupsReplication> $DBInstanceAutomatedBackupsReplications
 * @property bool $CustomerOwnedIpEnabled
 * @property string $AwsBackupRecoveryPointArn
 * @property 'stopped'|'starting'|'started'|'stopping' $ActivityStreamStatus
 * @property string $ActivityStreamKmsKeyId
 * @property string $ActivityStreamKinesisStreamName
 * @property 'sync'|'async' $ActivityStreamMode
 * @property bool $ActivityStreamEngineNativeAuditFieldsIncluded
 * @property 'full'|'all-paused' $AutomationMode
 * @property \Aws\Api\DateTimeResult $ResumeFullAutomationModeTime
 * @property string $CustomIamInstanceProfile
 * @property string $BackupTarget
 * @property string $NetworkType
 * @property 'locked'|'unlocked'|'locking-policy'|'unlocking-policy' $ActivityStreamPolicyStatus
 * @property int $StorageThroughput
 * @property string $DBSystemId
 * @property MasterUserSecret $MasterUserSecret
 * @property CertificateDetails $CertificateDetails
 * @property string $ReadReplicaSourceDBClusterIdentifier
 * @property string $PercentProgress
 * @property bool $DedicatedLogVolume
 * @property bool $IsStorageConfigUpgradeAvailable
 * @property bool $MultiTenant
 * @property string $EngineLifecycleSupport
 */
class DBInstance extends Shape
{
    /**
     * @param array{
     *     DBInstanceIdentifier?: string,
     *     DBInstanceClass?: string,
     *     Engine?: string,
     *     DBInstanceStatus?: string,
     *     AutomaticRestartTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     DBName?: string,
     *     Endpoint?: Endpoint,
     *     AllocatedStorage?: int,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     PreferredBackupWindow?: string,
     *     BackupRetentionPeriod?: int,
     *     DBSecurityGroups?: list<DBSecurityGroupMembership>,
     *     VpcSecurityGroups?: list<VpcSecurityGroupMembership>,
     *     DBParameterGroups?: list<DBParameterGroupStatus>,
     *     AvailabilityZone?: string,
     *     DBSubnetGroup?: DBSubnetGroup,
     *     PreferredMaintenanceWindow?: string,
     *     PendingModifiedValues?: PendingModifiedValues,
     *     LatestRestorableTime?: \Aws\Api\DateTimeResult,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     ReadReplicaSourceDBInstanceIdentifier?: string,
     *     ReadReplicaDBInstanceIdentifiers?: list<string>,
     *     ReadReplicaDBClusterIdentifiers?: list<string>,
     *     ReplicaMode?: 'open-read-only'|'mounted',
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupMemberships?: list<OptionGroupMembership>,
     *     CharacterSetName?: string,
     *     NcharCharacterSetName?: string,
     *     SecondaryAvailabilityZone?: string,
     *     PubliclyAccessible?: bool,
     *     StatusInfos?: list<DBInstanceStatusInfo>,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     DbInstancePort?: int,
     *     DBClusterIdentifier?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     DbiResourceId?: string,
     *     CACertificateIdentifier?: string,
     *     DomainMemberships?: list<DomainMembership>,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     EnhancedMonitoringResourceArn?: string,
     *     MonitoringRoleArn?: string,
     *     PromotionTier?: int,
     *     DBInstanceArn?: string,
     *     Timezone?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     PerformanceInsightsEnabled?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     EnabledCloudwatchLogsExports?: list<string>,
     *     ProcessorFeatures?: list<ProcessorFeature>,
     *     DeletionProtection?: bool,
     *     AssociatedRoles?: list<DBInstanceRole>,
     *     ListenerEndpoint?: Endpoint,
     *     MaxAllocatedStorage?: int,
     *     TagList?: list<Tag>,
     *     DBInstanceAutomatedBackupsReplications?: list<DBInstanceAutomatedBackupsReplication>,
     *     CustomerOwnedIpEnabled?: bool,
     *     AwsBackupRecoveryPointArn?: string,
     *     ActivityStreamStatus?: 'stopped'|'starting'|'started'|'stopping',
     *     ActivityStreamKmsKeyId?: string,
     *     ActivityStreamKinesisStreamName?: string,
     *     ActivityStreamMode?: 'sync'|'async',
     *     ActivityStreamEngineNativeAuditFieldsIncluded?: bool,
     *     AutomationMode?: 'full'|'all-paused',
     *     ResumeFullAutomationModeTime?: \Aws\Api\DateTimeResult,
     *     CustomIamInstanceProfile?: string,
     *     BackupTarget?: string,
     *     NetworkType?: string,
     *     ActivityStreamPolicyStatus?: 'locked'|'unlocked'|'locking-policy'|'unlocking-policy',
     *     StorageThroughput?: int,
     *     DBSystemId?: string,
     *     MasterUserSecret?: MasterUserSecret,
     *     CertificateDetails?: CertificateDetails,
     *     ReadReplicaSourceDBClusterIdentifier?: string,
     *     PercentProgress?: string,
     *     DedicatedLogVolume?: bool,
     *     IsStorageConfigUpgradeAvailable?: bool,
     *     MultiTenant?: bool,
     *     EngineLifecycleSupport?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
