<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBCluster;

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
 * @property string $PreferredBackupWindow
 * @property string $PreferredMaintenanceWindow
 * @property Shapes\CloudwatchLogsExportConfiguration $CloudwatchLogsExportConfiguration
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 * @property bool $DeletionProtection
 * @property string $StorageType
 * @property bool $ManageMasterUserPassword
 * @property string $MasterUserSecretKmsKeyId
 * @property bool $RotateMasterUserPassword
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
     *     PreferredBackupWindow?: string,
     *     PreferredMaintenanceWindow?: string,
     *     CloudwatchLogsExportConfiguration?: Shapes\CloudwatchLogsExportConfiguration,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool,
     *     DeletionProtection?: bool,
     *     StorageType?: string,
     *     ManageMasterUserPassword?: bool,
     *     MasterUserSecretKmsKeyId?: string,
     *     RotateMasterUserPassword?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
