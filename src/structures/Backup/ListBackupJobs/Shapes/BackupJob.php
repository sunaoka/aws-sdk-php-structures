<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $BackupJobId
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property string|null $VaultType
 * @property string|null $VaultLockState
 * @property string|null $RecoveryPointArn
 * @property Lifecycle|null $RecoveryPointLifecycle
 * @property string|null $EncryptionKeyArn
 * @property bool|null $IsEncrypted
 * @property string|null $ResourceArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|null $State
 * @property string|null $StatusMessage
 * @property string|null $PercentDone
 * @property int|null $BackupSizeInBytes
 * @property string|null $IamRoleArn
 * @property RecoveryPointCreator|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $ExpectedCompletionDate
 * @property \Aws\Api\DateTimeResult|null $StartBy
 * @property string|null $ResourceType
 * @property int|null $BytesTransferred
 * @property array<string, string>|null $BackupOptions
 * @property string|null $BackupType
 * @property string|null $ParentJobId
 * @property bool|null $IsParent
 * @property string|null $ResourceName
 * @property \Aws\Api\DateTimeResult|null $InitiationDate
 * @property string|null $MessageCategory
 */
class BackupJob extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     BackupJobId?: string|null,
     *     BackupVaultName?: string|null,
     *     BackupVaultArn?: string|null,
     *     VaultType?: string|null,
     *     VaultLockState?: string|null,
     *     RecoveryPointArn?: string|null,
     *     RecoveryPointLifecycle?: Lifecycle|null,
     *     EncryptionKeyArn?: string|null,
     *     IsEncrypted?: bool|null,
     *     ResourceArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATED'|'PENDING'|'RUNNING'|'ABORTING'|'ABORTED'|'COMPLETED'|'FAILED'|'EXPIRED'|'PARTIAL'|null,
     *     StatusMessage?: string|null,
     *     PercentDone?: string|null,
     *     BackupSizeInBytes?: int|null,
     *     IamRoleArn?: string|null,
     *     CreatedBy?: RecoveryPointCreator|null,
     *     ExpectedCompletionDate?: \Aws\Api\DateTimeResult|null,
     *     StartBy?: \Aws\Api\DateTimeResult|null,
     *     ResourceType?: string|null,
     *     BytesTransferred?: int|null,
     *     BackupOptions?: array<string, string>|null,
     *     BackupType?: string|null,
     *     ParentJobId?: string|null,
     *     IsParent?: bool|null,
     *     ResourceName?: string|null,
     *     InitiationDate?: \Aws\Api\DateTimeResult|null,
     *     MessageCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
