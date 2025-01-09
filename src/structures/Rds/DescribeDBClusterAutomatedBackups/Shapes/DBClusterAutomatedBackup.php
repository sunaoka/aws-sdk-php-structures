<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterAutomatedBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $VpcId
 * @property string $DBClusterAutomatedBackupsArn
 * @property string $DBClusterIdentifier
 * @property RestoreWindow $RestoreWindow
 * @property string $MasterUsername
 * @property string $DbClusterResourceId
 * @property string $Region
 * @property string $LicenseModel
 * @property string $Status
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property \Aws\Api\DateTimeResult $ClusterCreateTime
 * @property bool $StorageEncrypted
 * @property int $AllocatedStorage
 * @property string $EngineVersion
 * @property string $DBClusterArn
 * @property int $BackupRetentionPeriod
 * @property string $EngineMode
 * @property list<string> $AvailabilityZones
 * @property int $Port
 * @property string $KmsKeyId
 * @property string $StorageType
 * @property int $Iops
 * @property string $AwsBackupRecoveryPointArn
 * @property int $StorageThroughput
 */
class DBClusterAutomatedBackup extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     VpcId?: string,
     *     DBClusterAutomatedBackupsArn?: string,
     *     DBClusterIdentifier?: string,
     *     RestoreWindow?: RestoreWindow,
     *     MasterUsername?: string,
     *     DbClusterResourceId?: string,
     *     Region?: string,
     *     LicenseModel?: string,
     *     Status?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult,
     *     StorageEncrypted?: bool,
     *     AllocatedStorage?: int,
     *     EngineVersion?: string,
     *     DBClusterArn?: string,
     *     BackupRetentionPeriod?: int,
     *     EngineMode?: string,
     *     AvailabilityZones?: list<string>,
     *     Port?: int,
     *     KmsKeyId?: string,
     *     StorageType?: string,
     *     Iops?: int,
     *     AwsBackupRecoveryPointArn?: string,
     *     StorageThroughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
