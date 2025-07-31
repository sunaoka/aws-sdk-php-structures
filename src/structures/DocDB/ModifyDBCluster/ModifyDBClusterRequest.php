<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBCluster;

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
 * @property string|null $PreferredBackupWindow
 * @property string|null $PreferredMaintenanceWindow
 * @property Shapes\CloudwatchLogsExportConfiguration|null $CloudwatchLogsExportConfiguration
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 * @property bool|null $DeletionProtection
 * @property string|null $StorageType
 * @property Shapes\ServerlessV2ScalingConfiguration|null $ServerlessV2ScalingConfiguration
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property bool|null $RotateMasterUserPassword
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
     *     PreferredBackupWindow?: string|null,
     *     PreferredMaintenanceWindow?: string|null,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null,
     *     DeletionProtection?: bool|null,
     *     StorageType?: string|null,
     *     ServerlessV2ScalingConfiguration?: Shapes\ServerlessV2ScalingConfiguration|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     RotateMasterUserPassword?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
