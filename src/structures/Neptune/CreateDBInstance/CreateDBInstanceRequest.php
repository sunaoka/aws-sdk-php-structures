<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBName
 * @property string $DBInstanceIdentifier
 * @property int $AllocatedStorage
 * @property string $DBInstanceClass
 * @property string $Engine
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property list<string> $DBSecurityGroups
 * @property list<string> $VpcSecurityGroupIds
 * @property string $AvailabilityZone
 * @property string $DBSubnetGroupName
 * @property string $PreferredMaintenanceWindow
 * @property string $DBParameterGroupName
 * @property int $BackupRetentionPeriod
 * @property string $PreferredBackupWindow
 * @property int $Port
 * @property bool $MultiAZ
 * @property string $EngineVersion
 * @property bool $AutoMinorVersionUpgrade
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $OptionGroupName
 * @property string $CharacterSetName
 * @property bool $PubliclyAccessible
 * @property list<Shapes\Tag> $Tags
 * @property string $DBClusterIdentifier
 * @property string $StorageType
 * @property string $TdeCredentialArn
 * @property string $TdeCredentialPassword
 * @property bool $StorageEncrypted
 * @property string $KmsKeyId
 * @property string $Domain
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property string $MonitoringRoleArn
 * @property string $DomainIAMRoleName
 * @property int $PromotionTier
 * @property string $Timezone
 * @property bool $EnableIAMDatabaseAuthentication
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property list<string> $EnableCloudwatchLogsExports
 * @property bool $DeletionProtection
 */
class CreateDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBName?: string,
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int,
     *     DBInstanceClass: string,
     *     Engine: string,
     *     MasterUsername?: string,
     *     MasterUserPassword?: string,
     *     DBSecurityGroups?: list<string>,
     *     VpcSecurityGroupIds?: list<string>,
     *     AvailabilityZone?: string,
     *     DBSubnetGroupName?: string,
     *     PreferredMaintenanceWindow?: string,
     *     DBParameterGroupName?: string,
     *     BackupRetentionPeriod?: int,
     *     PreferredBackupWindow?: string,
     *     Port?: int,
     *     MultiAZ?: bool,
     *     EngineVersion?: string,
     *     AutoMinorVersionUpgrade?: bool,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     CharacterSetName?: string,
     *     PubliclyAccessible?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     DBClusterIdentifier: string,
     *     StorageType?: string,
     *     TdeCredentialArn?: string,
     *     TdeCredentialPassword?: string,
     *     StorageEncrypted?: bool,
     *     KmsKeyId?: string,
     *     Domain?: string,
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     MonitoringRoleArn?: string,
     *     DomainIAMRoleName?: string,
     *     PromotionTier?: int,
     *     Timezone?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     EnableCloudwatchLogsExports?: list<string>,
     *     DeletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
