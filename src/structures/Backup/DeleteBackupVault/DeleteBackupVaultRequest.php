<?php

namespace Sunaoka\Aws\Structures\Backup\DeleteBackupVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupVaultName
 */
class DeleteBackupVaultRequest extends Request
{
    /**
     * @param array{BackupVaultName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
