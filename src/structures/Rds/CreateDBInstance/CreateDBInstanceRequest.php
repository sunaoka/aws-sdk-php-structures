<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBName
 * @property string $DBInstanceIdentifier
 * @property int|null $AllocatedStorage
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string|null $MasterUsername
 * @property string|null $MasterUserPassword
 * @property list<string>|null $DBSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property string|null $AvailabilityZone
 * @property string|null $DBSubnetGroupName
 * @property string|null $PreferredMaintenanceWindow
 * @property string|null $DBParameterGroupName
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property int|null $Port
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property string|null $OptionGroupName
 * @property string|null $CharacterSetName
 * @property string|null $NcharCharacterSetName
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DBClusterIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $Domain
 * @property string|null $DomainFqdn
 * @property string|null $DomainOu
 * @property string|null $DomainAuthSecretArn
 * @property list<string>|null $DomainDnsIps
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property string|null $DomainIAMRoleName
 * @property int|null $PromotionTier
 * @property string|null $Timezone
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property 'standard'|'advanced'|null $DatabaseInsightsMode
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property int|null $PerformanceInsightsRetentionPeriod
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property list<Shapes\ProcessorFeature>|null $ProcessorFeatures
 * @property bool|null $DeletionProtection
 * @property int|null $MaxAllocatedStorage
 * @property bool|null $EnableCustomerOwnedIp
 * @property string|null $NetworkType
 * @property string|null $BackupTarget
 * @property string|null $CustomIamInstanceProfile
 * @property string|null $DBSystemId
 * @property string|null $CACertificateIdentifier
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property bool|null $MultiTenant
 * @property bool|null $DedicatedLogVolume
 * @property string|null $EngineLifecycleSupport
 * @property 'password'|'iam-db-auth'|null $MasterUserAuthenticationType
 */
class CreateDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBName?: string|null,
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int|null,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     MasterUsername?: string|null,
     *     MasterUserPassword?: string|null,
     *     DBSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     AvailabilityZone?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     DBParameterGroupName?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     Port?: int|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     OptionGroupName?: string|null,
     *     CharacterSetName?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DBClusterIdentifier?: string|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     Domain?: string|null,
     *     DomainFqdn?: string|null,
     *     DomainOu?: string|null,
     *     DomainAuthSecretArn?: string|null,
     *     DomainDnsIps?: list<string>|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     PromotionTier?: int|null,
     *     Timezone?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     DatabaseInsightsMode?: 'standard'|'advanced'|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     PerformanceInsightsRetentionPeriod?: int|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     ProcessorFeatures?: list<Shapes\ProcessorFeature>|null,
     *     DeletionProtection?: bool|null,
     *     MaxAllocatedStorage?: int|null,
     *     EnableCustomerOwnedIp?: bool|null,
     *     NetworkType?: string|null,
     *     BackupTarget?: string|null,
     *     CustomIamInstanceProfile?: string|null,
     *     DBSystemId?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     MultiTenant?: bool|null,
     *     DedicatedLogVolume?: bool|null,
     *     EngineLifecycleSupport?: string|null,
     *     MasterUserAuthenticationType?: 'password'|'iam-db-auth'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
