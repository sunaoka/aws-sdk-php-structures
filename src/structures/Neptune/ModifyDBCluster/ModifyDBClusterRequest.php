<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property string $NewDBClusterIdentifier
 * @property bool $ApplyImmediately
 * @property int $BackupRetentionPeriod
 * @property string $DBClusterParameterGroupName
 * @property list<string> $VpcSecurityGroupIds
 * @property int $Port
 * @property string $MasterUserPassword
 * @property string $OptionGroupName
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property bool $EnableIAMDatabaseAuthentication
 * @property Shapes\CloudwatchLogsExportConfiguration $CloudwatchLogsExportConfiguration
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 * @property string $DBInstanceParameterGroupName
 * @property bool $DeletionProtection
 * @property bool $CopyTagsToSnapshot
 * @property Shapes\ServerlessV2ScalingConfiguration $ServerlessV2ScalingConfiguration
 * @property string $StorageType
 */
class ModifyDBClusterRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier: string,
     *     NewDBClusterIdentifier?: string,
     *     ApplyImmediately?: bool,
     *     BackupRetentionPeriod?: int,
     *     DBClusterParameterGroupName?: string,
     *     VpcSecurityGroupIds?: list<string>,
     *     Port?: int,
     *     MasterUserPassword?: string,
     *     OptionGroupName?: string,
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     EnableIAMDatabaseAuthentication?: bool,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool,
     *     DBInstanceParameterGroupName?: string,
     *     DeletionProtection?: bool,
     *     CopyTagsToSnapshot?: bool,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
