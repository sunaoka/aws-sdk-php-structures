<?php

namespace Sunaoka\Aws\Structures\Backup\CreateLogicallyAirGappedBackupVault;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BackupVaultName
 * @property string $BackupVaultArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property 'CREATING'|'AVAILABLE'|'FAILED' $VaultState
 */
class CreateLogicallyAirGappedBackupVaultResponse extends Response
{
}
