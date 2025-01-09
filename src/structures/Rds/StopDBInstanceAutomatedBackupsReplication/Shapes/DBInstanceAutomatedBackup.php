<?php

namespace Sunaoka\Aws\Structures\Rds\StopDBInstanceAutomatedBackupsReplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DBInstanceArn
 * @property string $DbiResourceId
 * @property string $Region
 * @property string $DBInstanceIdentifier
 * @property RestoreWindow $RestoreWindow
 * @property int $AllocatedStorage
 * @property string $Status
 * @property int $Port
 * @property string $AvailabilityZone
 * @property string $VpcId
 * @property \Aws\Api\DateTimeResult $InstanceCreateTime
 * @property string $MasterUsername
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $LicenseModel
 * @property int $Iops
 * @property string $OptionGroupName
 * @property string $TdeCredentialArn
 * @property bool $Encrypted
 * @property string $StorageType
 * @property string $KmsKeyId
 * @property string $Timezone
 * @property bool $IAMDatabaseAuthenticationEnabled
 * @property int $BackupRetentionPeriod
 * @property string $DBInstanceAutomatedBackupsArn
 * @property list<DBInstanceAutomatedBackupsReplication> $DBInstanceAutomatedBackupsReplications
 * @property string $BackupTarget
 * @property int $StorageThroughput
 * @property string $AwsBackupRecoveryPointArn
 * @property bool $DedicatedLogVolume
 * @property bool $MultiTenant
 */
class DBInstanceAutomatedBackup extends Shape
{
    /**
     * @param array{
     *     DBInstanceArn?: string,
     *     DbiResourceId?: string,
     *     Region?: string,
     *     DBInstanceIdentifier?: string,
     *     RestoreWindow?: RestoreWindow,
     *     AllocatedStorage?: int,
     *     Status?: string,
     *     Port?: int,
     *     AvailabilityZone?: string,
     *     VpcId?: string,
     *     InstanceCreateTime?: \Aws\Api\DateTimeResult,
     *     MasterUsername?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     LicenseModel?: string,
     *     Iops?: int,
     *     OptionGroupName?: string,
     *     TdeCredentialArn?: string,
     *     Encrypted?: bool,
     *     StorageType?: string,
     *     KmsKeyId?: string,
     *     Timezone?: string,
     *     IAMDatabaseAuthenticationEnabled?: bool,
     *     BackupRetentionPeriod?: int,
     *     DBInstanceAutomatedBackupsArn?: string,
     *     DBInstanceAutomatedBackupsReplications?: list<DBInstanceAutomatedBackupsReplication>,
     *     BackupTarget?: string,
     *     StorageThroughput?: int,
     *     AwsBackupRecoveryPointArn?: string,
     *     DedicatedLogVolume?: bool,
     *     MultiTenant?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
