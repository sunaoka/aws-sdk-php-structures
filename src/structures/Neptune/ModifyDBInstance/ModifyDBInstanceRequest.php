<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property int|null $AllocatedStorage
 * @property string|null $DBInstanceClass
 * @property string|null $DBSubnetGroupName
 * @property list<string>|null $DBSecurityGroups
 * @property list<string>|null $VpcSecurityGroupIds
 * @property bool|null $ApplyImmediately
 * @property string|null $MasterUserPassword
 * @property string|null $DBParameterGroupName
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $MultiAZ
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property bool|null $AutoMinorVersionUpgrade
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property string|null $OptionGroupName
 * @property string|null $NewDBInstanceIdentifier
 * @property string|null $StorageType
 * @property string|null $TdeCredentialArn
 * @property string|null $TdeCredentialPassword
 * @property string|null $CACertificateIdentifier
 * @property string|null $Domain
 * @property bool|null $CopyTagsToSnapshot
 * @property int|null $MonitoringInterval
 * @property int|null $DBPortNumber
 * @property bool|null $PubliclyAccessible
 * @property string|null $MonitoringRoleArn
 * @property string|null $DomainIAMRoleName
 * @property int|null $PromotionTier
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property bool|null $EnablePerformanceInsights
 * @property string|null $PerformanceInsightsKMSKeyId
 * @property Shapes\CloudwatchLogsExportConfiguration|null $CloudwatchLogsExportConfiguration
 * @property bool|null $DeletionProtection
 */
class ModifyDBInstanceRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     AllocatedStorage?: int|null,
     *     DBInstanceClass?: string|null,
     *     DBSubnetGroupName?: string|null,
     *     DBSecurityGroups?: list<string>|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     ApplyImmediately?: bool|null,
     *     MasterUserPassword?: string|null,
     *     DBParameterGroupName?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     MultiAZ?: bool|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     AutoMinorVersionUpgrade?: bool|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     OptionGroupName?: string|null,
     *     NewDBInstanceIdentifier?: string|null,
     *     StorageType?: string|null,
     *     TdeCredentialArn?: string|null,
     *     TdeCredentialPassword?: string|null,
     *     CACertificateIdentifier?: string|null,
     *     Domain?: string|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     MonitoringInterval?: int|null,
     *     DBPortNumber?: int|null,
     *     PubliclyAccessible?: bool|null,
     *     MonitoringRoleArn?: string|null,
     *     DomainIAMRoleName?: string|null,
     *     PromotionTier?: int|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     EnablePerformanceInsights?: bool|null,
     *     PerformanceInsightsKMSKeyId?: string|null,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration|null,
     *     DeletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
