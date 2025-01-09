<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PendingCloudwatchLogsExports $PendingCloudwatchLogsExports
 * @property string $DBClusterIdentifier
 * @property string $MasterUserPassword
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property string $EngineVersion
 * @property int $BackupRetentionPeriod
 * @property int $AllocatedStorage
 * @property RdsCustomClusterConfiguration $RdsCustomClusterConfiguration
 * @property int $Iops
 * @property string $StorageType
 * @property CertificateDetails $CertificateDetails
 */
class ClusterPendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     PendingCloudwatchLogsExports?: PendingCloudwatchLogsExports,
     *     DBClusterIdentifier?: string,
     *     MasterUserPassword?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     EngineVersion?: string,
     *     BackupRetentionPeriod?: int,
     *     AllocatedStorage?: int,
     *     RdsCustomClusterConfiguration?: RdsCustomClusterConfiguration,
     *     Iops?: int,
     *     StorageType?: string,
     *     CertificateDetails?: CertificateDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
