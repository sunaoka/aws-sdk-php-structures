<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string|null $NewDBClusterIdentifier
 * @property bool|null $ApplyImmediately
 * @property int|null $BackupRetentionPeriod
 * @property string|null $DBClusterParameterGroupName
 * @property list<string>|null $VpcSecurityGroupIds
 * @property int|null $Port
 * @property string|null $MasterUserPassword
 * @property string|null $OptionGroupName
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property bool|null $EnableIAMDatabaseAuthentication
 * @property Shapes\CloudwatchLogsExportConfiguration|null $CloudwatchLogsExportConfiguration
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property string|null $DBInstanceParameterGroupName
 * @property bool|null $DeletionProtection
 * @property bool|null $CopyTagsToSnapshot
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property string|null $StorageType
 */
class ModifyDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     NewDBClusterIdentifier?: string|null,
     *     ApplyImmediately?: bool|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBClusterParameterGroupName?: string|null,
     *     VpcSecurityGroupIds?: list<string>|null,
     *     Port?: int|null,
     *     MasterUserPassword?: string|null,
     *     OptionGroupName?: string|null,
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     EnableIAMDatabaseAuthentication?: bool|null,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     DBInstanceParameterGroupName?: string|null,
     *     DeletionProtection?: bool|null,
     *     CopyTagsToSnapshot?: bool|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
