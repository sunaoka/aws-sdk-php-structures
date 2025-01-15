<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance;

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
 * @property string|null $OptionGroupName
 * @property string|null $CharacterSetName
 * @property bool|null $PubliclyAccessible
 * @property list<Shapes\Tag>|null $Tags
 * @property string $DBClusterIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property bool|null $StorageEncrypted
 * @property string|null $KmsKeyId
 * @property string|null $Domain
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property string|null $MonitoringRoleArn
 * @property string|null $DomainIAMRoleName
 * @property int|null $PromotionTier
 * @property string|null $Timezone
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property list<string>|null $EnableCloudwatchLogsExports
 * @property bool|null $DeletionProtection
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
     *     OptionGroupName?: string|null,
     *     CharacterSetName?: string|null,
     *     PubliclyAccessible?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DBClusterIdentifier: string,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     StorageEncrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     Domain?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     MonitoringRoleArn?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     PromotionTier?: int|null,
     *     Timezone?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     EnableCloudwatchLogsExports?: list<string>|null,
     *     DeletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
