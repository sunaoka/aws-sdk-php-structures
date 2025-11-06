<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByBackupVault\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecoveryPointArn
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property string|null $SourceBackupVaultArn
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property RecoveryPointCreator|null $CreatedBy
 * @property string|null $IamRoleArn
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED'|'AVAILABLE'|'STOPPED'|'CREATING'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $InitiationDate
 * @property \Aws\Api\DateTimeResult|null $CompletionDate
 * @property int|null $BackupSizeInBytes
 * @property CalculatedLifecycle|null $CalculatedLifecycle
 * @property Lifecycle|null $Lifecycle
 * @property string|null $EncryptionKeyArn
 * @property bool|null $IsEncrypted
 * @property \Aws\Api\DateTimeResult|null $LastRestoreTime
 * @property string|null $ParentRecoveryPointArn
 * @property string|null $CompositeMemberIdentifier
 * @property bool|null $IsParent
 * @property string|null $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null $IndexStatus
 * @property string|null $IndexStatusMessage
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null $EncryptionKeyType
 */
class RecoveryPointByBackupVault extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string|null,
     *     BackupVaultName?: string|null,
     *     BackupVaultArn?: string|null,
     *     SourceBackupVaultArn?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     CreatedBy?: RecoveryPointCreator|null,
     *     IamRoleArn?: string|null,
     *     Status?: 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED'|'AVAILABLE'|'STOPPED'|'CREATING'|null,
     *     StatusMessage?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     InitiationDate?: \Aws\Api\DateTimeResult|null,
     *     CompletionDate?: \Aws\Api\DateTimeResult|null,
     *     BackupSizeInBytes?: int|null,
     *     CalculatedLifecycle?: CalculatedLifecycle|null,
     *     Lifecycle?: Lifecycle|null,
     *     EncryptionKeyArn?: string|null,
     *     IsEncrypted?: bool|null,
     *     LastRestoreTime?: \Aws\Api\DateTimeResult|null,
     *     ParentRecoveryPointArn?: string|null,
     *     CompositeMemberIdentifier?: string|null,
     *     IsParent?: bool|null,
     *     ResourceName?: string|null,
     *     VaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null,
     *     IndexStatus?: 'PENDING'|'ACTIVE'|'FAILED'|'DELETING'|null,
     *     IndexStatusMessage?: string|null,
     *     EncryptionKeyType?: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
