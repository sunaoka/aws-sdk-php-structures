<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusterAutomatedBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $VpcId
 * @property string|null $DBClusterAutomatedBackupsArn
 * @property string|null $DBClusterIdentifier
 * @property RestoreWindow|null $RestoreWindow
 * @property string|null $MasterUsername
 * @property string|null $DbClusterResourceId
 * @property string|null $Region
 * @property string|null $LicenseModel
 * @property string|null $Status
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property \Aws\Api\DateTimeResult|null $ClusterCreateTime
 * @property bool|null $StorageEncrypted
 * @property 'none'|'sse-kms'|'sse-rds'|null $StorageEncryptionType
 * @property int|null $AllocatedStorage
 * @property string|null $EngineVersion
 * @property string|null $DBClusterArn
 * @property int|null $BackupRetentionPeriod
 * @property string|null $PreferredBackupWindow
 * @property string|null $EngineMode
 * @property list<string>|null $AvailabilityZones
 * @property int|null $Port
 * @property string|null $KmsKeyId
 * @property string|null $StorageType
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property string|null $AwsBackupRecoveryPointArn
 * @property list<Tag>|null $TagList
 */
class DBClusterAutomatedBackup extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     VpcId?: string|null,
     *     DBClusterAutomatedBackupsArn?: string|null,
     *     DBClusterIdentifier?: string|null,
     *     RestoreWindow?: RestoreWindow|null,
     *     MasterUsername?: string|null,
     *     DbClusterResourceId?: string|null,
     *     Region?: string|null,
     *     LicenseModel?: string|null,
     *     Status?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     ClusterCreateTime?: \Aws\Api\DateTimeResult|null,
     *     StorageEncrypted?: bool|null,
     *     StorageEncryptionType?: 'none'|'sse-kms'|'sse-rds'|null,
     *     AllocatedStorage?: int|null,
     *     EngineVersion?: string|null,
     *     DBClusterArn?: string|null,
     *     BackupRetentionPeriod?: int|null,
     *     PreferredBackupWindow?: string|null,
     *     EngineMode?: string|null,
     *     AvailabilityZones?: list<string>|null,
     *     Port?: int|null,
     *     KmsKeyId?: string|null,
     *     StorageType?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     TagList?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
