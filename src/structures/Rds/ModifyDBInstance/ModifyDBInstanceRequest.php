<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int $AllocatedStorage
 * @property string $DBInstanceClass
 * @property string $DBSubnetGroupName
 * @property list<string> $DBSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property bool $ApplyImmediately
 * @property string $MasterUserPassword
 * @property string $DBParameterGroupName
 * @property int $BackupRetentionPeriod
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 * @property bool $AutoMinorVersionUpgrade
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $OptionGroupName
 * @property string $NewDBInstanceIdentifier
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property string $TdeCredentialPassword
 * @property string $CACertificateIdentifier
 * @property string $Domain
 * @property string $DomainFqdn
 * @property string $DomainOu
 * @property string $DomainAuthSecretArn
 * @property list<string> $DomainDnsIps
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property int $DBPortNumber
 * @property bool $PubliclyAccessible
 * @property string $MonitoringRoleArn
 * @property string $DomainIAMRoleName
 * @property bool $DisableDomain
 * @property int $PromotionTier
 * @property bool $EnableIAMDatabaseAuthentication
 * @property 'standard'|'advanced' $DatabaseInsightsMode
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property int $PerformanceInsightsRetentionPeriod
 * @property Shapes\CloudwatchLogsExportConfiguration $CloudwatchLogsExportConfiguration
 * @property list<Shapes\ProcessorFeature> $ProcessorFeatures
 * @property bool $UseDefaultProcessorFeatures
 * @property bool $DeletionProtection
 * @property int $MaxAllocatedStorage
 * @property bool $CertificateRotationRestart
 * @property 'open-read-only'|'mounted' $ReplicaMode
 * @property bool $EnableCustomerOwnedIp
 * @property string $AwsBackupRecoveryPointArn
 * @property 'full'|'all-paused' $AutomationMode
 * @property int $ResumeFullAutomationModeMinutes
 * @property string $NetworkType
 * @property int $StorageThroughput
 * @property bool $ManageMasterUserPassword
 * @property bool $RotateMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property string $Engine
 * @property bool $DedicatedLogVolume
 * @property bool $MultiTenant
 */
class ModifyDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int,
     *     DBInstanceClass?: string,
     *     DBSubnetGroupName?: string,
     *     DBSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     ApplyImmediately?: bool,
     *     MasterUserPassword?: string,
     *     DBParameterGroupName?: string,
     *     BackupRetentionPeriod?: int,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool,
     *     AutoMinorVersionUpgrade?: bool,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     NewDBInstanceIdentifier?: string,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     TdeCredentialPassword?: string,
     *     CACertificateIdentifier?: string,
     *     Domain?: string,
     *     DomainFqdn?: string,
     *     DomainOu?: string,
     *     DomainAuthSecretArn?: string,
     *     DomainDnsIps?: list<string>,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     DBPortNumber?: int,
     *     PubliclyAccessible?: bool,
     *     MonitoringRoleArn?: string,
     *     DomainIAMRoleName?: string,
     *     DisableDomain?: bool,
     *     PromotionTier?: int,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     DatabaseInsightsMode?: 'standard'|'advanced',
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     PerformanceInsightsRetentionPeriod?: int,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>,
     *     UseDefaultProcessorFeatures?: bool,
     *     DeletionProtection?: bool,
     *     MaxAllocatedStorage?: int,
     *     CertificateRotationRestart?: bool,
     *     ReplicaMode?: 'open-read-only'|'mounted',
     *     EnableCustomerOwnedIp?: bool,
     *     AwsBackupRecoveryPointArn?: string,
     *     AutomationMode?: 'full'|'all-paused',
     *     ResumeFullAutomationModeMinutes?: int,
     *     NetworkType?: string,
     *     StorageThroughput?: int,
     *     ManageMasterUserPassword?: bool,
     *     RotateMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     Engine?: string,
     *     DedicatedLogVolume?: bool,
     *     MultiTenant?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
