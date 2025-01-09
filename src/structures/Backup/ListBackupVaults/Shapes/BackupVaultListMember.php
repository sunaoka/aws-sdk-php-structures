<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $VaultType
 * @property 'CREATING'|'AVAILABLE'|'FAILED' $VaultState
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $EncryptionKeyArn
 * @property string $CreatorRequestId
 * @property int $NumberOfRecoveryPoints
 * @property bool $Locked
 * @property int $MinRetentionDays
 * @property int $MaxRetentionDays
 * @property \Aws\Api\DateTimeResult $LockDate
 */
class BackupVaultListMember extends Shape
{
    /**
     * @param array{
     *     BackupVaultName?: string,
     *     BackupVaultArn?: string,
     *     VaultType?: 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT',
     *     VaultState?: 'CREATING'|'AVAILABLE'|'FAILED',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     EncryptionKeyArn?: string,
     *     CreatorRequestId?: string,
     *     NumberOfRecoveryPoints?: int,
     *     Locked?: bool,
     *     MinRetentionDays?: int,
     *     MaxRetentionDays?: int,
     *     LockDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
