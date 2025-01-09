<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecoveryPointArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED' $Status
 * @property string $StatusMessage
 * @property string $EncryptionKeyArn
 * @property int $BackupSizeBytes
 * @property string $BackupVaultName
 * @property bool $IsParent
 * @property string $ParentRecoveryPointArn
 * @property string $ResourceName
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $VaultType
 * @property 'PENDING'|'ACTIVE'|'FAILED'|'DELETING' $IndexStatus
 * @property string $IndexStatusMessage
 */
class RecoveryPointByResource extends Shape
{
    /**
     * @param array{
     *     RecoveryPointArn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     Status?: 'COMPLETED'|'PARTIAL'|'DELETING'|'EXPIRED',
     *     StatusMessage?: string,
     *     EncryptionKeyArn?: string,
     *     BackupSizeBytes?: int,
     *     BackupVaultName?: string,
     *     IsParent?: bool,
     *     ParentRecoveryPointArn?: string,
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
