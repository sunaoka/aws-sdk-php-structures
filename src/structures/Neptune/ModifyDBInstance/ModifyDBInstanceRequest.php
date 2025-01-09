<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBInstance;

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
 * @property bool $CopyTagsToSnapshot
 * @property int $MonitoringInterval
 * @property int $DBPortNumber
 * @property bool $PubliclyAccessible
 * @property string $MonitoringRoleArn
 * @property string $DomainIAMRoleName
 * @property int $PromotionTier
 * @property bool $EnableIAMDatabaseAuthentication
 * @property bool $EnablePerformanceInsights
 * @property string $PerformanceInsightsKMSKeyId
 * @property Shapes\CloudwatchLogsExportConfiguration $CloudwatchLogsExportConfiguration
 * @property bool $DeletionProtection
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
     *     CopyTagsToSnapshot?: bool,
     *     MonitoringInterval?: int,
     *     DBPortNumber?: int,
     *     PubliclyAccessible?: bool,
     *     MonitoringRoleArn?: string,
     *     DomainIAMRoleName?: string,
     *     PromotionTier?: int,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     EnablePerformanceInsights?: bool,
     *     PerformanceInsightsKMSKeyId?: string,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration,
     *     DeletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
