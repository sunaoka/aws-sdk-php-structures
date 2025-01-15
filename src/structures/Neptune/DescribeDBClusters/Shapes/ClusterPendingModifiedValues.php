<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeDBClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PendingCloudwatchLogsExports|null $PendingCloudwatchLogsExports
 * @property string|null $DBClusterIdentifier
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property string|null $EngineVersion
 * @property int|null $BackupRetentionPeriod
 * @property string|null $StorageType
 * @property int|null $AllocatedStorage
 * @property int|null $Iops
 */
class ClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports|null,
     *     DBClusterIdentifier?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     EngineVersion?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     StorageType?: string|null,
     *     AllocatedStorage?: int|null,
     *     Iops?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
