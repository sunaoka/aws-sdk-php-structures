<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PendingCloudwatchLogsExports|null $PendingCloudwatchLogsExports
 * @property string|null $DBClusterIdentifier
 * @property string|null $MasterUserPassword
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property string|null $EngineVersion
 * @property int|null $BackupRetentionPeriod
 * @property int|null $AllocatedStorage
 * @property int|null $Iops
 * @property string|null $StorageType
 */
class ClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports|null,
     *     DBClusterIdentifier?: string|null,
     *     MasterUserPassword?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     EngineVersion?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     AllocatedStorage?: int|null,
     *     Iops?: int|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
