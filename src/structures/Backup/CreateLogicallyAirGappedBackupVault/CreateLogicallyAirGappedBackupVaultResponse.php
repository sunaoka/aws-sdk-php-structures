<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLogicallyAirGappedBackupVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BackupVaultName
 * @property string|null $BackupVaultArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property 'CREATING'|'AVAILABLE'|'FAILED'|null $VaultState
 */
class CreateLogicallyAirGappedBackupVaultResponse extends Response
{
}
