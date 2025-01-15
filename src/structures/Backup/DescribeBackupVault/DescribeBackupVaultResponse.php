<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeBackupVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property 'BACKUP_VAULT'|'LOGICALLY_AIR_GAPPED_BACKUP_VAULT'|null $VaultType
 * @property 'CREATING'|'AVAILABLE'|'FAILED'|null $VaultState
 * @property string|null $EncryptionKeyArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $CreatorRequestId
 * @property int|null $NumberOfRecoveryPoints
 * @property bool|null $Locked
 * @property int|null $MinRetentionDays
 * @property int|null $MaxRetentionDays
 * @property \Aws\Api\DateTimeResult|null $LockDate
 */
class DescribeBackupVaultResponse extends Response
{
}
