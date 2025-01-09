<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BackupSizeInBytes
 * @property string $BackupVaultArn
 * @property string $BackupVaultName
 * @property AwsBackupRecoveryPointCalculatedLifecycleDetails $CalculatedLifecycle
 * @property string $CompletionDate
 * @property AwsBackupRecoveryPointCreatedByDetails $CreatedBy
 * @property string $CreationDate
 * @property string $EncryptionKeyArn
 * @property string $IamRoleArn
 * @property bool $IsEncrypted
 * @property string $LastRestoreTime
 * @property AwsBackupRecoveryPointLifecycleDetails $Lifecycle
 * @property string $RecoveryPointArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property string $SourceBackupVaultArn
 * @property string $Status
 * @property string $StatusMessage
 * @property string $StorageClass
 */
class AwsBackupRecoveryPointDetails extends Shape
{
    /**
     * @param array{
     *     BackupSizeInBytes?: int,
     *     BackupVaultArn?: string,
     *     BackupVaultName?: string,
     *     CalculatedLifecycle?: AwsBackupRecoveryPointCalculatedLifecycleDetails,
     *     CompletionDate?: string,
     *     CreatedBy?: AwsBackupRecoveryPointCreatedByDetails,
     *     CreationDate?: string,
     *     EncryptionKeyArn?: string,
     *     IamRoleArn?: string,
     *     IsEncrypted?: bool,
     *     LastRestoreTime?: string,
     *     Lifecycle?: AwsBackupRecoveryPointLifecycleDetails,
     *     RecoveryPointArn?: string,
     *     ResourceArn?: string,
     *     ResourceType?: string,
     *     SourceBackupVaultArn?: string,
     *     Status?: string,
     *     StatusMessage?: string,
     *     StorageClass?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
