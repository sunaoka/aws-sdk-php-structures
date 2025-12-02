<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBInstanceAutomatedBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DBInstanceArn
 * @property string|null $DbiResourceId
 * @property string|null $Region
 * @property string|null $DBInstanceIdentifier
 * @property RestoreWindow|null $RestoreWindow
 * @property int|null $AllocatedStorage
 * @property string|null $Status
 * @property int|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $VpcId
 * @property \Aws\Api\DateTimeResult|null $InstanceCreateTime
 * @property string|null $MasterUsername
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $LicenseModel
 * @property int|null $Iops
 * @property int|null $StorageThroughput
 * @property string|null $OptionGroupName
 * @property string|null $TdeCredentialArn
 * @property bool|null $Encrypted
 * @property string|null $StorageType
 * @property string|null $KmsKeyId
 * @property string|null $Timezone
 * @property bool|null $IAMDatabaseAuthenticationEnabled
 * @property int|null $BackupRetentionPeriod
 * @property string|null $DBInstanceAutomatedBackupsArn
 * @property list<DBInstanceAutomatedBackupsReplication>|null $DBInstanceAutomatedBackupsReplications
 * @property string|null $BackupTarget
 * @property bool|null $MultiTenant
 * @property string|null $AwsBackupRecoveryPointArn
 * @property bool|null $DedicatedLogVolume
 * @property list<AdditionalStorageVolume>|null $AdditionalStorageVolumes
 */
class DBInstanceAutomatedBackup extends Shape
{
    /**
     * @param array{
     *     DBInstanceArn?: string|null,
     *     DbiResourceId?: string|null,
     *     Region?: string|null,
     *     DBInstanceIdentifier?: string|null,
     *     RestoreWindow?: RestoreWindow|null,
     *     AllocatedStorage?: int|null,
     *     Status?: string|null,
     *     Port?: int|null,
     *     AvailabilityZone?: string|null,
     *     VpcId?: string|null,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult|null,
     *     MasterUsername?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     LicenseModel?: string|null,
     *     Iops?: int|null,
     *     StorageThroughput?: int|null,
     *     OptionGroupName?: string|null,
     *     TdeCredentialArn?: string|null,
     *     Encrypted?: bool|null,
     *     StorageType?: string|null,
     *     KmsKeyId?: string|null,
     *     Timezone?: string|null,
     *     IAMDatabaseAuthenticationEnabled?: bool|null,
     *     BackupRetentionPeriod?: int|null,
     *     DBInstanceAutomatedBackupsArn?: string|null,
     *     DBInstanceAutomatedBackupsReplications?: list<DBInstanceAutomatedBackupsReplication>|null,
     *     BackupTarget?: string|null,
     *     MultiTenant?: bool|null,
     *     AwsBackupRecoveryPointArn?: string|null,
     *     DedicatedLogVolume?: bool|null,
     *     AdditionalStorageVolumes?: list<AdditionalStorageVolume>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
