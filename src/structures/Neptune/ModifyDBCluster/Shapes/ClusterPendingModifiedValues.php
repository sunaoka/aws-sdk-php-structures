<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PendingCloudwatchLogsExports $PendingCloudwatchLogsExports
 * @property string $DBClusterIdentifier
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property string $EngineVersion
 * @property int $BackupRetentionPeriod
 * @property string $StorageType
 * @property int $AllocatedStorage
 * @property int $Iops
 */
class ClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports,
     *     DBClusterIdentifier?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     EngineVersion?: string,
     *     BackupRetentionPeriod?: int,
     *     StorageType?: string,
     *     AllocatedStorage?: int,
     *     Iops?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
