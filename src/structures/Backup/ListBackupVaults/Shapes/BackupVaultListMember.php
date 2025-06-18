<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null $VaultType
 * @property 'CREATING'|'AVAILABLE'|'FAILED'|null $VaultState
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $EncryptionKeyArn
 * @property string|null $CreatorRequestId
 * @property int|null $NumberOfRecoveryPoints
 * @property bool|null $Locked
 * @property int|null $MinRetentionDays
 * @property int|null $MaxRetentionDays
 * @property \Aws\Api\DateTimeResult|null $LockDate
 */
class BackupVaultListMember extends Shape
{
    /**
     * @param array{
     *     BackupVaultName?: string|null,
     *     BackupVaultArn?: string|null,
     *     VaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|'RESTORE_ACCESS_BACKUP_VAULT'|null,
     *     VaultState?: 'CREATING'|'AVAILABLE'|'FAILED'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     EncryptionKeyArn?: string|null,
     *     CreatorRequestId?: string|null,
     *     NumberOfRecoveryPoints?: int|null,
     *     Locked?: bool|null,
     *     MinRetentionDays?: int|null,
     *     MaxRetentionDays?: int|null,
     *     LockDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
