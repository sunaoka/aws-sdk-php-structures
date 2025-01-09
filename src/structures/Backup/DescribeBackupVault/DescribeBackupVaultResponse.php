<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT' $VaultType
 * @property 'CREATING'|'AVAILABLE'|'FAILED' $VaultState
 * @property string $EncryptionKeyArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $CreatorRequestId
 * @property int $NumberOfRecoveryPoints
 * @property bool $Locked
 * @property int $MinRetentionDays
 * @property int $MaxRetentionDays
 * @property \Aws\Api\DateTimeResult $LockDate
 */
class DescribeBackupVaultResponse extends Response
{
}
