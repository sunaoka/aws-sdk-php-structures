<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PendingCloudwatchLogsExports|null $PendingCloudwatchLogsExports
 * @property string|null $DBClusterIdentifier
 * @property string|null $MasterUserPassword
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property string|null $EngineVersion
 * @property int|null $BackupRetentionPeriod
 * @property string|null $StorageType
 * @property int|null $AllocatedStorage
 * @property RdsCustomClusterConfiguration|null $RdsCustomClusterConfiguration
 * @property int|null $Iops
 * @property CertificateDetails|null $CertificateDetails
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
     *     StorageType?: string|null,
     *     AllocatedStorage?: int|null,
     *     RdsCustomClusterConfiguration?: RdsCustomClusterConfiguration|null,
     *     Iops?: int|null,
     *     CertificateDetails?: CertificateDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
