<?php

namespace Sunaoka\Aws\Structures\Backup\CreateRestoreAccessBackupVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RestoreAccessBackupVaultArn
 * @property 'CREATING'|'AVAILABLE'|'FAILED'|null $VaultState
 * @property string|null $RestoreAccessBackupVaultName
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class CreateRestoreAccessBackupVaultResponse extends Response
{
}
