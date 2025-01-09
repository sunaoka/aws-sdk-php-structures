<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByBackupVault\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecoveryPointArn
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property string $SourceBackupVaultArn
 * @property string $ResourceArn
 * @property string $ResourceType
 * @property RecoveryPointCreator $CreatedBy
 * @property string $IamRoleArn
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CompletionDate
 * @property int $BackupSizeInBytes
 * @property CalculatedLifecycle $CalculatedLifecycle
 * @property Lifecycle $Lifecycle
 * @property string $EncryptionKeyArn
 * @property bool $IsEncrypted
 * @property \Aws\Api\DateTimeResult $LastRestoreTime
 * @property string $ParentRecoveryPointArn
 * @property string $CompositeMemberIdentifier
 * @property bool $IsParent
 * @property string $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property string $IndexStatusMessage
 */
class RecoveryPointByBackupVault extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string,
     *     BackupVaultName?: string,
     *     BackupVaultArn?: string,
     *     SourceBackupVaultArn?: string,
     *     ResourceArn?: string,
     *     ResourceType?: string,
     *     CreatedBy?: RecoveryPointCreator,
     *     IamRoleArn?: string,
     *     Status?: 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED',
     *     StatusMessage?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CompletionDate?: \Aws\Api\DateTimeResult,
     *     BackupSizeInBytes?: int,
     *     CalculatedLifecycle?: CalculatedLifecycle,
     *     Lifecycle?: Lifecycle,
     *     EncryptionKeyArn?: string,
     *     IsEncrypted?: bool,
     *     LastRestoreTime?: \Aws\Api\DateTimeResult,
     *     ParentRecoveryPointArn?: string,
     *     CompositeMemberIdentifier?: string,
     *     IsParent?: bool,
     *     ResourceName?: string,
     *     VaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT',
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING',
     *     IndexStatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
