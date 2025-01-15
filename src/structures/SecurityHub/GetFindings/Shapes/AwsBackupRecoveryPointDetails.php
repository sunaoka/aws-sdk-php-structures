<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $BackupSizeInBytes
 * @property string|null $BackupVaultArn
 * @property string|null $BackupVaultName
 * @property AwsBackupRecoveryPointCalculatedLifecycleDetails|null $CalculatedLifecycle
 * @property string|null $CompletionDate
 * @property AwsBackupRecoveryPointCreatedByDetails|null $CreatedBy
 * @property string|null $CreationDate
 * @property string|null $EncryptionKeyArn
 * @property string|null $IamRoleArn
 * @property bool|null $IsEncrypted
 * @property string|null $LastRestoreTime
 * @property AwsBackupRecoveryPointLifecycleDetails|null $Lifecycle
 * @property string|null $RecoveryPointArn
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property string|null $SourceBackupVaultArn
 * @property string|null $Status
 * @property string|null $StatusMessage
 * @property string|null $StorageClass
 */
class AwsBackupRecoveryPointDetails extends Shape
{
    /**
     * @param array{
     *     BackupSizeInBytes?: int|null,
     *     BackupVaultArn?: string|null,
     *     BackupVaultName?: string|null,
     *     CalculatedLifecycle?: AwsBackupRecoveryPointCalculatedLifecycleDetails|null,
     *     CompletionDate?: string|null,
     *     CreatedBy?: AwsBackupRecoveryPointCreatedByDetails|null,
     *     CreationDate?: string|null,
     *     EncryptionKeyArn?: string|null,
     *     IamRoleArn?: string|null,
     *     IsEncrypted?: bool|null,
     *     LastRestoreTime?: string|null,
     *     Lifecycle?: AwsBackupRecoveryPointLifecycleDetails|null,
     *     RecoveryPointArn?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     SourceBackupVaultArn?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null,
     *     StorageClass?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
